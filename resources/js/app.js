import './bootstrap';

document.querySelectorAll('.menu-header').forEach(header => {
  header.addEventListener('click', () => {
    const parent = header.parentElement;

    // collapse all others and set their icons to right-caret
    document.querySelectorAll('.menu-item').forEach(item => {
      if (item !== parent) {
        item.classList.remove('active');
        const otherIcon = item.querySelector('.menu-header i');
        if (otherIcon) {
          otherIcon.classList.remove('bi-chevron-down');
          otherIcon.classList.add('bi-chevron-right');
        }
      }
    });

    // toggle current
    parent.classList.toggle('active');

    // update current icon
    const icon = header.querySelector('i');
    if (icon) {
      if (parent.classList.contains('active')) {
        icon.classList.remove('bi-chevron-right');
        icon.classList.add('bi-chevron-down');
      } else {
        icon.classList.remove('bi-chevron-down');
        icon.classList.add('bi-chevron-right');
      }
    }
  });
});

// initialize icons for items that are already active on load
document.querySelectorAll('.menu-item').forEach(item => {
  const icon = item.querySelector('.menu-header i');
  if (!icon) return;
  if (item.classList.contains('active')) {
    icon.classList.remove('bi-chevron-right');
    icon.classList.add('bi-chevron-down');
  } else {
    icon.classList.remove('bi-chevron-down');
    icon.classList.add('bi-chevron-right');
  }
});
