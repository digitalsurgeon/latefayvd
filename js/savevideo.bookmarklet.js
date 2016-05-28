try {
    document.location.href='http://savevideo.co/?utm_campaign=bookmark&utm_source=browser&u=' + escape(window.location);
} catch(err) {
    window.console.log('bookmark failed');
}
