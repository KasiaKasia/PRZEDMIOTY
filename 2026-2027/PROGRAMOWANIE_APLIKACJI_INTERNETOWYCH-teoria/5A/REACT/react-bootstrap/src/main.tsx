import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
// 1. Najpierw importujesz Bootstrapa 
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// 2. Potem swoje własne style (dzięki temu możesz łatwo nadpisywać klasy Bootstrapa)
import './index.css'
import App from './App.tsx'

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <App />
  </StrictMode>,
)
