export function formatDate(date) {
    const options = { day: 'numeric', month: 'numeric', year: 'numeric' };
    return date.toLocaleDateString('en-GB', options);
  }
