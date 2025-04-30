import React  from "react"
import useDaries from "../Hooks/useDaries"

const DiaryList: React.FC = () => {
    const {diaries, loading, error} = useDaries()
    if(loading) return <p>Cargando diarios...</p>
    if(error) return <p>{error}</p>
    return(
        <div className="diary">
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