import { useEffect, useState } from "react";
import { getAllDiaries } from "../api/diaryService";
import { NonSensitiveDiaryEntry } from "../types";

const useDaries = () => {
  const [diaries, setDiaries] = useState<NonSensitiveDiaryEntry[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  const fetchDiaries = async () => {
    setLoading(true);
    setError(null);
    try {
      const data = await getAllDiaries();
      setDiaries(data);
    } catch (err) {
      setError("Error fetching diaries");
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchDiaries()
  }, []);

  return { diaries, loading, error, fetchDiaries };
};

export default useDaries;
