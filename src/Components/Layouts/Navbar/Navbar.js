import React from 'react'
import './Navbar.styles.css'
import { Link } from 'react-router-dom'

const Navbar = ({ darkTheme }) => {
  return (
    <section className={ `navbar-container ${ darkTheme ? 'background-dark relative' : 'background-transparent' } ` }>
       <div className="container flex justify-between align-center">
            <a href="#" className="logo">हाम्रो<span className="text-primary"> Book </span> पसल </a>
            <nav className="nav-links-container">
                <Link to="/"className="nav-links">Home</Link>
                <Link to="/books" className="nav-links">Books</Link>
            </nav>
       </div>
    </section>
  )
}

export default Navbar