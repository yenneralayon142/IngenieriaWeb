import { useEffect,useState } from "react";
import useDiariesPost from "../Hooks/useDiariesPost";
import { Weather,Visibility } from "../types";

const DiaryPost: React.FC = () => {
    
    const [weather,setWeather] = useState<Weather | "">("")
    const [date,setDate] = useState("")
    const [visibility,setVisibility] = useState<Visibility | "">("")
    const [comment, setComment] = useState("")
    const [message, setMessage] = useState<string | null>(null)
    const {sendDiary, loading, error, success,resetStatus} = useDiariesPost()

    const handleSend = () => {
        if(weather && date && visibility && comment) {
            const newDiary = {weather, date, visibility, comment}
            sendDiary(newDiary)
        } else {
            setMessage("Por favor complete todos los campos")
        }
    }

    useEffect(() => {
        if (success) {
          setWeather("");
          setDate("");
          setVisibility("");
          setComment("");
          setMessage(null);
          const timer = setTimeout(() => {
            resetStatus()
          }, 3000);
      
          return () => clearTimeout(timer);
        }
      }, [success, resetStatus]);

    return (
        <div className="diarySelect">
          <label htmlFor="weather">Ingrese el clima</label>
          <select
            id="weather"
            value={weather}
            onChange={(e) => setWeather(e.target.value as Weather)}
          >
            <option value="">Seleccione</option>
            <option value="sunny">Sunny</option>
            <option value="rainy">Rainy</option>
            <option value="cloudy">Cloudy</option>
            <option value="stormy">Stormy</option>
            <option value="windy">Windy</option>
          </select>
    
          <br />
    
          <label htmlFor="date">Ingrese la fecha</label>
          <input
            type="date"
            id="date"
            value={date}
            onChange={(e) => setDate(e.target.value)}
          />
    
          <br />
    
          <label htmlFor="visibility">Ingrese la visibilidad</label>
          <select
            id="visibility"
            value={visibility}
            onChange={(e) => setVisibility(e.target.value as Visibility)}
          >
            <option value="">Seleccione</option>
            <option value="great">Great</option>
            <option value="good">Good</option>
            <option value="ok">Ok</option>
            <option value="poor">Poor</option>
          </select>
    
          <br />
    
          <label htmlFor="comment">Ingrese el comentario</label>
          <input
            type="text"
            placeholder="What a day!"
            id="comment"
            value={comment}
            onChange={(e) => setComment(e.target.value)}
          />
    
          <br />
          <button onClick={handleSend}>Enviar Información</button>
    
          {loading && <p>Cargando...</p>}
          {error && <p style={{ color: "red" }}>{error}</p>}
          {success && <p style={{ color: "green" }}>Diario enviado con éxito</p>}
          {message && <p style={{ color: "red" }}>{message}</p>}
        </div>
      );
}

export default DiaryPost