import cgi, sys

form = cgi.FieldStorage() # извлечь данные из формы

print("Content­type: text/html") # плюс пустая строка

html1 = """

<TITLE>Отзыв</TITLE>

<H1>Обратная связь</H1>

<table border =2> <tr> <td>Имя поля</td><td>Значение</td> </tr>

"""

# печать заголовка таблицы

print (html1)
f = open('out.html')
f.write(html + '\n')

ll = ['Имя','Оценка','Специализация', 'Используемые языки','Отзыв']

data = ['','','','','']; i=0

for field in ('name', 'evaluation', 'job', 'language', 'comment'):

    if not field in form:

        data[i] = '(unknown)'

    else:

        if not isinstance(form[field], list):

            data[i] = form[field].value

        else:

            values = [x.value for x in form[field]]

            data[i] = ', '.join(values)

    i+=1

for i in range(5):
    f.write('<tr><td> %s </td> <td> %s </td></tr>'% (ll[i], data[i]) + '\n')
    print ('<tr><td> %s </td> <td> %s </td></tr>'% (ll[i], data[i]))

print (' </table>')
f.write(' </table>')
f.close()