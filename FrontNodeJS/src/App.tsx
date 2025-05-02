import DiaryList from "./components/DiaryList"
import DiaryBiId from "./components/DiaryBiId"
import DiaryPost from "./components/DiaryPost"
import './App.css'


function App() {
  return (
    <>  
      <div className="diary">
          <h1>Mi diario</h1>
          <DiaryList/>
          <h2>Busqueda por id</h2>
          <DiaryBiId/>
          <h2>Enviar datos al diario</h2>
          <p>Tenga en cuenta que el comentario no se mostrará ya que es privado</p>
          <DiaryPost/>
      </div>
    </>
  )
}

export default App
