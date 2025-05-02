import React  from "react"
import useDaries from "../Hooks/useDaries"

const DiaryList: React.FC = () => {
    const {diaries, loading, error,fetchDiaries} = useDaries()
    
    if(loading) return <p>Cargando diarios...</p>
    if(error) return <p>{error}</p>
    return(
        <div className="diary">
            <p>Presione en el botón de recargar datos para visualizar los nuevos registros</p>
            <button onClick={fetchDiaries}>Recargar Datos</button>
            <h2>Lista de Diarios</h2>
            <ul>
                {diaries.map(diary =>(
                    <li key={diary.id}>
                        {diary.date} - {diary.weather} - {diary.visibility}
                    </li>
                ))}
            </ul>
        </div>
    )
}

export default DiaryList