export type Weather = 'sunny' | 'rainy' | 'cloudy' | 'windy' | 'stormy'
export type Visibility = 'great' | 'good' | 'ok' | 'poor'

// Las interfaces están pensadas para ser extendidas
export interface DiaryEntry {
  id: number
  date: string
  weather: Wheather
  visibility: Visibility
  comment: string
}

//export type NonSensitiveInfoDiaryEntry = Pick<DiaryEntry, 'id' | 'date' | 'weather' | 'visibility'>

export type NonSensitiveInfoDiaryEntry = Omit<DiaryEntry,'comment'>
export type NewDiaryEntry = Omit<DiaryEntry, 'id'>