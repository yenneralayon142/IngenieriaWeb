import { NewDiaryEntry} from "./types"
import { Weather,Visibility } from "./enums"


const parseComment = (commentFromRequest: any): string => {
    if (!isString(commentFromRequest)){
        throw new Error('Incorrect or missing comment')
    } 
    return commentFromRequest 
}

const parseDate = (dateFromRequest: any):string => {
    if(!isString(dateFromRequest) || !isDate(dateFromRequest)){
        throw new Error('Incorrect or missing date')
    }
    return dateFromRequest
}

const parseWeather = (weatherFromRequest:any): Weather => {
    if(!isString(weatherFromRequest) || !isWeather(weatherFromRequest)){
        throw new Error('Incorrect or missing wheater')
    }
    return weatherFromRequest
}

const parseVisiblity = (visibilityFromRequest:any): Visibility => {
    if(!isString(visibilityFromRequest) || !isVisibility(visibilityFromRequest)){
        throw new Error('Incorrect or missing visibility')
    }
    return visibilityFromRequest
}

const isVisibility = (param:any):boolean => {
    return Object.values(Visibility).includes(param)
}

const isWeather = (param: any):boolean => {
    return Object.values(Weather).includes(param)
}

const isDate = (date:string):boolean => {
    return Boolean(Date.parse(date))
}

const isString = (string:string):boolean => {
    return typeof string === 'string'
}

const toNewDiaryEntry = (object:any):NewDiaryEntry => {
    const newEntry: NewDiaryEntry = {
        comment: parseComment(object.comment),
        date: parseDate(object.date),
        weather:parseWeather(object.weather),
        visibility:parseVisiblity(object.visibility)
    }

    return newEntry
}

export default toNewDiaryEntry