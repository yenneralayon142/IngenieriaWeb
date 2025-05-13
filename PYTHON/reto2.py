"""
/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */
"""
def Anag (word1,word2):
    if word1 == word2:
        return False
    return sorted(word1.lower()) == sorted(word2.lower())
print(Anag("lobo","bolo"))