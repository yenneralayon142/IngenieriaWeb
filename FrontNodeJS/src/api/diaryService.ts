import axios from "axios";
import { NonSensitiveDiaryEntry,DiaryEntry } from "../types";

const baseUrl = 'http://localhost:3000/api/diaries'

export const getAllDiaries = async ():Promise<NonSensitiveDiaryEntry[]>  => {
    const response = await axios.get<NonSensitiveDiaryEntry[]>(baseUrl)
    return response.data
}

export const getByIdDiaries = async (id:number):Promise<NonSensitiveDiaryEntry> => {
    const response = await axios.get<NonSensitiveDiaryEntry>(`${baseUrl}/${id}`)
    return response.data
}

export const postDiaries = async(newDiary: Omit<DiaryEntry,'id'>): Promise<DiaryEntry[]> =>{
    const response = await axios.post<DiaryEntry[]>(baseUrl,newDiary)
    return response.data
}

