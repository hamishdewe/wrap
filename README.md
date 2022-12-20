# wrap

The function 'wrap' takes two arguments, $string and $length.

The function returns the string, but with new lines ("\n") added to ensure that no line is longer than $length characters. 
Always wrapped at word boundaries if possible, a word is only broken if it is longer than $length characters. 
When breaking at word boundaries, all the whitespace between the two words is replaced with a single newline character. 
Any unbroken whitespace is unchanged.
