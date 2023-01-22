export const camelCaseToDash = srt => {
    return srt.replace( /([a-z])([A-Z])/g, '$1-$2' ).toLowerCase();
}

export const createElement = ( props ) => {
    let tagName = props.tagName || '<div>';
    let el = document.createElement( tagName );
    if ( props.classes ) {
        el.classList.add( ...props.classes );
    }

    if ( props.attributes ) {
        for( const [ key, value ] of Object.entries( props.attributes ) ) {
            el.setAttribute( camelCaseToDash( key ), String( value ) );
        }
    }

    if ( props.dataset ) {
        for( const [ key, value ] of Object.entries( props.dataset ) ) {
            el.dataset[ key ] = value;
        }
    }

    if ( props.textContent ) {
        el.textContent = props.textContent;
    }

    if ( props.innerHTML ) {
        el.innerHTML = props.innerHTML;
    }

    if ( props.parent ) {
        props.parent.appendChild( el );
    }

    return el;
}