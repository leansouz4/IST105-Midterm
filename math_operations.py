import sys

def add(a, b):
    return a + b

def subtract(a, b):
    return a - b

def multiply(a, b):
    return a * b

def divide(a, b):
    if b == 0:
        return "Erro: Divisão por zero não permitida."
    return a / b

def process_result(result):
    if result > 100:
        result *= 2
    elif result < 0:
        result += 50
    return result

if __name__ == "__main__":
    input1 = float(sys.argv[1])
    input2 = float(sys.argv[2])
    operation = sys.argv[3]

    if operation == 'add':
        result = add(input1, input2)
    elif operation == 'sub':
        result = subtract(input1, input2)
    elif operation == 'mul':
        result = multiply(input1, input2)
    elif operation == 'div':
        result = divide(input1, input2)
    else:
        result = "Operação inválida."

    final_result = process_result(result)
    print(f"Resultado: {final_result}")
