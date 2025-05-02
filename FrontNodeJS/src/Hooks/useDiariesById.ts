import { useEffect,useState } from "react";
import { getByIdDiaries } from "../api/diaryService";
import { NonSensitiveDiaryEntry } from "../types";

const useDiariesById = (id:number | null) => {
    const [diary,setDiary] = useState<NonSensitiveDiaryEntry | null>(null)
    const [loading,setLoading] = useState(true)
    const [error,setError] = useState<string | null>(null)
    
    useEffect(() => {
        if(id === null) return
        setLoading(true)
        setError(null)
        setDiary(null)
        getByIdDiaries(id)
            .then((data) => {
                setDiary(data)
                setLoading(false)
            })
            .catch(() =>{
                setError("Datos no encontrados")
                setLoading(false)
            })
    },[id])

    return {diary, loading, error,setError}
}
export default useDiariesById