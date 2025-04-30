import express from 'express' // EsModules
import * as diaryServices from '../services/diaryServices'

const router = express.Router()

router.get('/', (_req, res) => {
  res.send(diaryServices.getEntriesWithoutSensitiveInfo())
})

router.get('/:id', (req, res) => {
  const diary = diaryServices.findById(+req.params.id)
  if (diary) {
    res.send(diary);
  } else {
    res.sendStatus(404);
  }
})

router.post('/', (_req, res) => {
  res.send('Saving a diary!')
})

export default router
