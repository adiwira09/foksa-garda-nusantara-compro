/**
 * Interactive.js - Mobile and Desktop Interactive Features
 * Handles form interactions, animations, and enhanced UX for all devices
 */

(function() {
    'use strict';

    // Initialize on DOM Ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeInteractive);
    } else {
        initializeInteractive();
    }

    function initializeInteractive() {
        enhanceFormInteractions();
        setupScrollReveal();
        setupLazyLoading();
        setupResponsiveImages();
    }

    /**
     * Form Interactions Enhancement
     * Adds floating labels, validation feedback, and better UX
     */
    function enhanceFormInteractions() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            // Floating label effect for input fields
            const inputs = form.querySelectorAll('input, textarea, select');
            
            inputs.forEach(input => {
                const wrapper = input.parentElement;
                
                // Add focus class on focus
                input.addEventListener('focus', function() {
                    wrapper.classList.add('form-group-focused');
                    this.setAttribute('aria-invalid', 'false');
                });
                
                // Remove focus class when empty
                input.addEventListener('blur', function() {
                    if (!this.value.trim()) {
                        wrapper.classList.remove('form-group-focused');
                    }
                });
                
                // Add filled class when has value
                input.addEventListener('input', function() {
                    if (this.value.trim()) {
                        wrapper.classList.add('form-group-filled');
                    } else {
                        wrapper.classList.remove('form-group-filled');
                    }
                });
                
                // Initialize state if field has value
                if (input.value.trim()) {
                    wrapper.classList.add('form-group-filled');
                }
            });

            // Form submission handling
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
                }
            });
        });
    }

    /**
     * Scroll Reveal Animation
     * Reveals elements as they come into viewport
     */
    function setupScrollReveal() {
        const revealElements = document.querySelectorAll(
            '[data-reveal], .fade-in-on-scroll, .slide-in-on-scroll'
        );

        if ('IntersectionObserver' in window) {
            const revealObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            revealElements.forEach(el => {
                revealObserver.observe(el);
            });
        } else {
            // Fallback for older browsers
            revealElements.forEach(el => {
                el.classList.add('revealed');
            });
        }
    }

    /**
     * Lazy Loading for Images
     * Uses IntersectionObserver for native lazy loading support
     */
    function setupLazyLoading() {
        const lazyImages = document.querySelectorAll('img[data-lazy]');

        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.lazy;
                        img.removeAttribute('data-lazy');
                        img.classList.add('lazy-loaded');
                        observer.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(img => {
                imageObserver.observe(img);
            });
        } else {
            // Fallback: load all images immediately
            lazyImages.forEach(img => {
                img.src = img.dataset.lazy;
                img.removeAttribute('data-lazy');
            });
        }
    }

    /**
     * Responsive Images
     * Switches image sources based on device size
     */
    function setupResponsiveImages() {
        const pictureSources = document.querySelectorAll('picture source');

        pictureSources.forEach(source => {
            const media = source.media;
            const srcset = source.srcset;
            
            if (media && window.matchMedia(media).matches) {
                const img = source.closest('picture').querySelector('img');
                if (img && !img.src) {
                    img.src = srcset.split(',')[0].split(' ')[0];
                }
            }
        });
    }

    /**
     * Enhanced Button Feedback
     * Adds visual feedback for button interactions
     */
    function setupButtonFeedback() {
        const buttons = document.querySelectorAll('button, [role="button"]');
        
        buttons.forEach(btn => {
            btn.addEventListener('mousedown', function() {
                this.classList.add('btn-pressed');
            });
            
            btn.addEventListener('mouseup', function() {
                this.classList.remove('btn-pressed');
            });
            
            btn.addEventListener('mouseleave', function() {
                this.classList.remove('btn-pressed');
            });
        });
    }

    /**
     * Debounce utility function
     */
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    /**
     * Throttle utility function
     */
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    /**
     * Mobile Detection
     */
    const isMobile = () => {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    };

    /**
     * Touch Support Detection
     */
    const hasTouchSupport = () => {
        return 'ontouchstart' in window || 
               navigator.maxTouchPoints > 0 || 
               navigator.msMaxTouchPoints > 0;
    };

    /**
     * Utility to check if element is in viewport
     */
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    /**
     * Smooth scroll to element
     */
    window.smoothScrollTo = function(selector) {
        const element = document.querySelector(selector);
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    };

    /**
     * Add ripple effect to elements
     */
    window.addRippleEffect = function(selector) {
        const elements = document.querySelectorAll(selector);
        
        elements.forEach(element => {
            element.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });
    };

    // Export utilities for use in other scripts
    window.InteractiveUtils = {
        debounce,
        throttle,
        isMobile,
        hasTouchSupport,
        isInViewport
    };

})();
