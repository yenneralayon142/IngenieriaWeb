import { DiaryEntry,NonSensitiveInfoDiaryEntry } from '../types.js'
import diaryData from  './diaries.json'

const diaries: DiaryEntry[] = diaryData as DiaryEntry[]

export const getEntries = ():DiaryEntry[] => diaries 

export const findById = (id: number): DiaryEntry | undefined => {
    const entry = diaries.find(d => d.id === id)
    return entry
}

export const getEntriesWithoutSensitiveInfo = (): Array<NonSensitiveInfoDiaryEntry> =>{
    return diaries.map(({id,date,weather,visibility}) => {
        return {
            id,
            date,
            weather,
            visibility
        }
    }) 
}   

export const addEntry = (): undefined => undefined

