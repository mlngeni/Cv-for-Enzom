import smtplib

content = 'Enzom did not liked your cv'

mail = smtplib.SMTP('smtp.gmail.com', 587)

mail.ehlo()

mail.starttls()

# my email and pwd
mail.login('theblueapprentice@gmail.com', 'learning101')


#sendmail(from, to, msg)
mail.sendmail('theblueapprentice@gmail.com', 'theblueapprentice@gmail.com', content)
mail.close()