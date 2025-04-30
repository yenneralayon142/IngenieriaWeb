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
        getByIdDiaries(id)
            .then((data) => {
                setDiary(data)
                setLoading(false)
            })
            .catch(() =>{
                setError("Error fetching diary by ID")
                setLoading(false)
            })
    },[id])

    return {diary, loading, error}
}
export default useDiariesById