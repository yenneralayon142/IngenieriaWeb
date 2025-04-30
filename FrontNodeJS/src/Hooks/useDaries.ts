import { useEffect,useState } from "react"
import { getAllDiaries } from "../api/diaryService"
import { NonSensitiveDiaryEntry } from "../types"

const useDaries = () => {
    const [diaries,setDiaries] = useState<NonSensitiveDiaryEntry[]>([])
    const [loading,setLoading] = useState(true)
    const [error,setError] = useState<string | null>(null)

    useEffect(() =>{
        getAllDiaries()
            .then(data => {
                setDiaries(data)
                setLoading(false)
            })
            .catch(err =>{
                setError('Error fetching diaries')
                setLoading(false)
            })           
    },[])
    console.log(diaries)
    return {diaries,loading,error}
}

export default useDaries