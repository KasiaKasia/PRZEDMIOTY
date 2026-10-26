# React + TypeScript + Vite + Bootstrap


## **1. Tworzenie projektu:**

```bash
npm create vite react-bootstrap
```

Podczas tworzenia projektu trzeba będzie wybrać kilka opcji/ustawień. Poniżej listać, które ustawienia są preferowane:

◇  Select a framework:

│  **React**

◇  Select a variant:

│  **TypeScript**

◇  Which linter to use?

│  **ESLint**

◇  Install with npm and start now?

│  **Yes**
 
 


## 2. Instalacja Bootstrapa

Otwórz terminal w folderze swojego projektu i uruchom poniższe polecenie:
```bash
npm install bootstrap
```

## 3. Import CSS w projekcie

Aby style Bootstrapa były dostępne w całej aplikacji, musisz zaimportować je na samym początku drzewa komponentów.

1. Otwórz plik `src/main.jsx` (lub `src/main.tsx`, `src/index.jsx`).

2. Dodaj poniższą linijkę nad plikiem css. Dzięki temu możesz łatwo nadpisywać klasy Bootstrapa:

```JS
import 'bootstrap/dist/css/bootstrap.min.css';
```



## 4. Import JavaScript w projekcie

Jeśli chcesz korzystać z interaktywnych komponentów Bootstrapa (np. wysuwane menu), zaimportuj również jego skrypt JavaScript w plikU `src/main.jsx` (lub `src/main.tsx`, `src/index.jsx`).

```JS
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
```

## 5. Konfiguraca dla CSS i JavaScript dla Bootstrap

Zawartość pliku `src/main.tsx` powinna się przedstawiać następująco:

```TS
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
```



## 4. Wykonanie testów, czy Bootstrap działa

w pliku `react-bootstrap\src\App.tsx`

Dopisz:

```HTML
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
```

Cały pliki prezentuję się następująco:

```TS
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
```

## Uruchomienie projektu 

`npm run dev`