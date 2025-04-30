import { Weather,Visibility } from "./enums"

// Las interfaces están pensadas para ser extendidas
export interface DiaryEntry {
  id: number
  date: string
  weather: Weather
  visibility: Visibility
  comment: string
}

//export type NonSensitiveInfoDiaryEntry = Pick<DiaryEntry, 'id' | 'date' | 'weather' | 'visibility'>

export type NonSensitiveInfoDiaryEntry = Omit<DiaryEntry,'comment'>
export type NewDiaryEntry = Omit<DiaryEntry, 'id'>