# L4 Inertia Links

## Link component

When we use href links, a standard anchor tag, it goes a full page refresh, which defeats the purpose (SPA).

Instead, we replace it with a slight wrapper, that inertia provides: the link component.

The Link component is ultimately an anchor tag, but when you click on it, inertia will intercept that and instead perform an AJAX request to the server.

The server due to that middleware we had installed that will understand that it needs to return a JSON response that contains all the information about the new page.
