export function getCookieValue(name: string): string {
  if (typeof document === 'undefined') {
    return '';
  }

  const match = document.cookie
    .split('; ')
    .find((cookie) => cookie.startsWith(`${name}=`));

  if (!match) {
    return '';
  }

  return decodeURIComponent(match.split('=').slice(1).join('='));
}
