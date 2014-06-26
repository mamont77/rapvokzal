$(document).ready(function() {

    //front
    $('.front_block .content').corner('bottom 8px');

    //blocks
    //$('.block').not("#block-block-17").corner('8px');
    $('#searchform .text').corner('left 8px');
    $('#text_welcome').corner('bottom 8px');

    //nodes
    $('#content-area').corner('bottom 8px');
    $('.fivestar-widget').not('.clear-block').corner('8px');

    //CCK
    $('.group-about-album, .group-about-links, .field-type-nodereference, .yashare-auto-init, .links.inline, .group-about-video-clip, .group-download-video-clip, .group-about-cinema, .group-ttx, .field-field-cinema-link').corner('8px');

    //comments
    $('.comment').not('.forum-post').corner('8px');
    //$('.bb-quote-body').corner('8px');

    //submit
    $('#comments .links li a, .more-link a').corner('8px');

    //forum
    //$('.forum-links li a').corner('8px');

    // styling for footer menu
    //$('#footer').corner('8px');

    //attr title
    /*
     $('[title]').bt(
     {
     //titleSelector: "attr('href')",
     fill: '#D9D9D9',
     cssStyles: {color: '#0085D2', width: 'auto'},
     width: 200,
     padding: 5,
     cornerRadius: 8,
     animate: true,
     spikeLength: 15,
     spikeGirth: 5,
     positions: ['right', 'left', 'bottom'],
     }
     );
     */

});
