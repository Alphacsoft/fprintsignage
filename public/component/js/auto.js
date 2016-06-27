function top() {
    document.getElementById( 'top' ).scrollIntoView();    
};

function bottom() {
    document.getElementById( 'bottom' ).scrollIntoView();
    window.setTimeout( function () { top(); }, 100 );
};

bottom();