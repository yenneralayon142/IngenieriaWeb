import React from "react"
import DiaryList from "./components/DiaryList"
import DiaryBiId from "./components/DiaryBiId"
import './App.css'

function App() {
  return (
    <>  
      <div className="diary">
          <h1>Mi diario</h1>
          <DiaryList/>
          <DiaryBiId/>
      </div>
    </>
  )
}

export default App
