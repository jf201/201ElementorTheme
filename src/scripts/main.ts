// @ts-ignore: no typescript support for aos
import AOS from 'aos'
import 'aos/dist/aos.css'
import header from './layout/header'

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 600
    })

    header.init()
})
