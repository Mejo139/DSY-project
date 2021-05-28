// hamburger menu
let icon = document.getElementById('hamburger-menu')
let nav = document.getElementById('navigation-menu')

let iconMenu = document.getElementById('icon-menu')
let iconClose = document.getElementById('icon-close')

icon.addEventListener( 'click', function() {
    nav.classList.toggle( 'hidden' )
    iconMenu.classList.toggle( 'hidden' )
    iconClose.classList.toggle( 'hidden' )
})

// toggle between exterior and interior and show related content
let interiorBtn = document.getElementById('select-interior')
let exteriorBtn = document.getElementById('select-exterior')

let interior = document.getElementById( 'interior' )
let exterior = document.getElementById( 'exterior' )

interiorBtn.addEventListener( 'click', function() {
    interiorBtn.classList.add( 'selected' )
    exteriorBtn.classList.remove( 'selected' )

    interior.classList.remove( 'hidden' )
    exterior.classList.add( 'hidden' )
} )

exteriorBtn.addEventListener( 'click', function() {
    interiorBtn.classList.remove( 'selected' )
    exteriorBtn.classList.add( 'selected' )

    interior.classList.add( 'hidden' )
    exterior.classList.remove( 'hidden' )
} )