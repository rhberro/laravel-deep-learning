/**
 * Initialize the tooltips in every component that has the
 * tippy class.
 */
tippy(
    document.querySelectorAll('.tippy'),
    {
        placement: 'right',
        duration: 200,
        arrow: true,
        delay: 500
    }
)