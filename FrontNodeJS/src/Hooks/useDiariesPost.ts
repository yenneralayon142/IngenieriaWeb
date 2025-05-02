import { useState,useEffect } from "react";
import { postDiaries } from "../api/diaryService";
import { DiaryEntry } from "../types";

const useDiariesPost = () => {
    const [loading, setLoading] = useState(false)
    const [error, setError] = useState<string | null>(null)
    const [success,setSuccess]  = useState<boolean>(false)

    const sendDiary = async (newDiary: Omit<DiaryEntry,'id'>) =>{
        setLoading(true)
        setError(null)
        setSuccess(false)
        try{
            await postDiaries(newDiary)
            setSuccess(true)
        } catch(err) {
            setError("No se pudo enviar el diario")
        } finally {
            setLoading(false)
        }
    }

    const resetStatus = () => {
        setSuccess(false)
        setError(null)
    }

    return { sendDiary, loading,error,success,resetStatus}
    
}

export default useDiariesPost