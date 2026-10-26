import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import heroImg from './assets/hero.png'
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <section id="center">
          <div className="container mt-5 text-center">
          <div className="card mx-auto" style={{ maxWidth: '18rem' }}>
            <div className="card-body">
              <h5 className="card-title">Bootstrap + Vite</h5>
              <p className="card-text">Wszystko działa poprawnie!</p>
              <button className="btn btn-primary">Kliknij mnie</button>
            </div>
          </div>
          <label htmlFor="exampleFormControlInput" className="form-label mb-2">Email address</label>
          <input type="email" className="form-control" id="exampleFormControlInput" placeholder="name@example.com"></input>
        </div> 
        <button
          type="button"
          className="counter"
          onClick={() => setCount((count) => count + 1)}
        >
          Count is {count}
        </button>
      </section>

      <div className="ticks"></div>
 
      <div className="ticks"></div>
      <section id="spacer"></section>
    </>
  )
}

export default App
