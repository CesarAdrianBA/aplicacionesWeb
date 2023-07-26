import random
import string

def generate_code():
    characters = string.ascii_letters + string.digits
    code = ''.join(random.choice(characters) for _ in range(6))
    return code

generated_code = generate_code()
print(generated_code)
