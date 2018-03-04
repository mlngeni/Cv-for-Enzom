import folium
#print(dir(folium))



map = folium.Map(location = [31.2001, 29.9187], zoom_start= 13) 
print(map)



#print(dir(folium.Map))
print(map.save('map.html'))