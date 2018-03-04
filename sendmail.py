import smtplib


content = 'Enzom liked your cv and will contact you soon'


mail = smtplib.SMTP('smtp.gmail.com', 587)

mail.ehlo()

mail.starttls()

# my email and pwd
mail.login('theblueapprentice@gmail.com', 'learning101')


#sendmail(from, to, msg)
mail.sendmail('theblueapprentice@gmail.com', 'theblueapprentice@gmail.com', content)
mail.close()