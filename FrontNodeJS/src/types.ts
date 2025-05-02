export type Weather = 'sunny' | 'rainy' | 'cloudy' | 'windy' | 'stormy'
export type Visibility = 'great' | 'good' | 'ok' | 'poor'

export interface NonSensitiveDiaryEntry {
  id: number
  date: string
  weather: Weather
  visibility: Visibility
}

export interface DiaryEntry extends NonSensitiveDiaryEntry{
  comment: string
}