# Regiseration

> Payload

```json
{
	"facebook_id":"1234567",
	"first_name":"salma",
	"last_name":"salma shehata",
	"password":"123456",
	"email":"salma@test.co.uk",
  "gender":"male",
  "device_token":"akndjsnamlqjwjqhwjqlwkqkwhqkwkqlsnsansknsa",
  "date_of_birth":"24-09-1994",
  "profession":"manager",
  "relationship_status":"married",
  "lat":"30.0444",
  "lng":"31.2357",
  "dog_name":"toti",
  "dog_breed":"test breed7",
  "dog_age":"4",
  "dog_gender":"female",
	"image":"image.jpg"
}

```

> Response

```json
{
  "customer": {
    "first_name": "salma",
    "last_name": "salma shehata",
    "password": "123456",
    "email": "salma@test.co.uk",
    "gender": "male",
    "api_token": "MhrFjniPUKUIPTwevjx7wecmO9DkPCULGlhulNS3",
    "device_token": "akndjsnamlqjwjqhwjqlwkqkwhqkwkqlsnsansknsa",
    "date_of_birth": "22-09-1994",
    "profession": "manager",
    "relationship_status": "married",
    "lat": "30.0444",
    "lng": "31.2357",
    "country_code": "853123",
    "city": "Cairo Governorate",
    "id": 19,
    "dog": {
      "id": 13,
      "name": "toti",
      "breed": "test breed7",
      "mixed": null,
      "ddob": null,
      "age": "4",
      "sex": "female",
      "description": null
    },
    "images": {
      "id": 9,
      "image": "http://localhost:8000/uploads/587b6976cf164.jpg",
      "thumb": "http://localhost:8000/uploads/587b6976cf164.jpg"
    }
  }
}

```
`POST {{url}}/api/v1/register`

# New Facebook login Api


> Payload

```json
{
	"first_name":"salma",
	"last_name":"salma shehata",
	"password":"123456",
	"email":"salma@test.co.uk",
  "gender":"male",
  "device_token":"akndjsnamlqjwjqhwjqlwkqkwhqkwkqlsnsansknsa",
  "date_of_birth":"24-09-1994",
  "profession":"manager",
  "relationship_status":"married",
  "lat":"30.0444",
  "lng":"31.2357",
  "dog_name":"toti",
  "dog_breed":"test breed7",
  "dog_age":"4",
  "dog_gender":"female",
	"image":"image.jpg",
  "facebook_id":"1234567"
}

```


>Response

```json
{
  "success": 1,
  "customer_type": "old_customer",
  "customer": {
    "id": 222,
    "username": "emademad elmogy",
    "email": "emad@test.net",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "akndjsnamlqjwjqhwjqlwkqkwhqkwkqlsnsansknsaaaasq",
    "date_of_birth": "22-09-1994",
    "profession": "manager",
    "relationship_status": "married",
    "city": "San Francisco",
    "first_name": "emad",
    "last_name": "emad elmogy",
    "lat": "37.785834",
    "lng": "-122.406417",
    "api_token": "LlgU5w0Q9w1TtBnB8G4L3pHREJekwHmKgGucNelY",
    "updated_at": null,
    "confirm_code": null,
    "country_code": null,
    "created_at": "2017-04-07 19:23:00",
    "country": "USA",
    "facebook_id": "1234567",
    "dog": {
      "id": 64,
      "name": "toti",
      "breed": "test breed7",
      "age": "4",
      "sex": "female"
    },
    "images": [
      {
        "id": 720,
        "image": "http://188.166.71.152/uploads/58e7e7144ab18.jpg",
        "thumb": "http://188.166.71.152/uploads/58e7e7144ab18.jpg",
        "is_sniffed": false,
        "num_of_sniffs": 0
      },
      {
        "id": 721,
        "image": "",
        "thumb": ""
      },
      {
        "id": 722,
        "image": "",
        "thumb": ""
      },
      {
        "id": 723,
        "image": "",
        "thumb": ""
      },
      {
        "id": 724,
        "image": "",
        "thumb": ""
      }
    ]
  }
}


```

`POST {{url}}/api/v1/login_by_facebook`

`customer_type` parameter will return to differniate between new customer and existed customer
its value will be on of those :
- new_customer
- old_customer

# Facebook Authentication

> Payload

```json
{
	"facebook_id":"123456"
}

```
> Response

```json
{
	"success":1,
	"customer_type":"new_customer"

}

```
`POST {{url}}/api/v1/auth_facebook`

`customer_type` parameter will return to differniate between new customer and existed customer
its value will be on of those :
- new_customer
- old_customer

# Forget Password

> Payload

```json
{
	"email":"emadelmogy619@gmail.com"
}

```
> Response

```json
{
  "message": "Confirmation Code has been sent to your mail."
}

```
`POST {{url}}/api/v1/forget_password`

# Update Password

> Payload

```json
{
	"confirm_code":"8379",
	"password":"ajsajshaj"
}

```
> Response

```json
{
  "message": "Your Password has been been updated."
}

```
`POST {{url}}/api/v1/update_password`



# Authentication

> Payload

```json
{
	"email":"emad@test.com",
	"password":"123456",
	"device_token":"iweywgsjaknskagsgahjlwjuqwghqjkwjqjwvqtwygqh"
}

```

> Response

```json
{
  "customer": {
    "id": 8,
    "username": "",
    "email": "emad@test.com",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "iweywgsjaknskagsgahjlwjuqwghqjkwjqjwvqtwygqh",
    "date_of_birth": "24-09-1994",
    "profession": "developer",
    "relationship_status": "single",
    "city": "Cairo Governorate",
    "first_name": "emad",
    "last_name": "elmogy",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "7zxZTkeiOD5qIcK2GBiWb5iHxhG3JhTo06vUhNBJ",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": "1546523",
    "dog": {
      "id": 6,
      "name": "foxy",
      "breed": "test breed",
      "mixed": null,
      "ddob": null,
      "age": "3",
      "sex": "male",
      "description": null
    },
    "images": {
      "id": 2,
      "image": "http://localhost:8000/uploads/587037986fba2.jpg",
      "thumb": "http://localhost:8000/uploads/587037986fba2.jpg"
    }
  }
}

```

`POST {{url}}/api/v1/auth`

Use this request to authenticate a customer, the customer shall provide his email and password and if correct the following response will be returned.

In case of Failure a `401` response will be returned.

### API Token

In the customer response you'll receive an `api_token` key, save this key on the device as it'll be used to authorize all future requests.

### Authorization

In all future requests you need to provide the following header:

`Authorization: Bearer {{API_TOKEN_HERE}}`

## Logging Out

> Response

```json
{
    "logged_out": true
}
```

`POST {{url}}/api/v1/logout`

# Update Profile

> Payload

```json
{
	"first_name":"salma",
	"last_name":"shehata",
  "gender":"male",
  "date_of_birth":"24-09-1994",
  "profession":"manager",
  "relationship_status":"married",
  "lat":"30.0444",
  "lng":"31.2357",
  "dog_name":"toti",
  "dog_breed":"test breed7",
  "dog_age":"4",
  "dog_gender":"female",
	"image1":"image.jpg",
	"image2":"image.jpg",
	"image3":"image.jpg",
	"image4":"image.jpg",
	"image5":"image.jpg"
}


```

> Response

```json
{
  "success": 1,
  "message": "profile data has been updated.",
  "customer": {
    "id": 92,
    "username": "johncena",
    "email": "cena@gmail.com",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "wrqtwqyuwiqmqkhwqksasjqjehqj",
    "date_of_birth": null,
    "profession": null,
    "relationship_status": null,
    "city": "Cairo Governorate",
    "first_name": "john",
    "last_name": "cena",
    "lat": null,
    "lng": null,
    "api_token": "uoQY4kVnhU9OqGSjyWd2fo9t245lEeBp9WQQh53F",
    "updated_at": null,
    "confirm_code": null,
    "country_code": null,
    "created_at": "2017-02-08 23:10:13",
    "country": "Egypt",
    "dog": {
      "id": 92,
      "name": "lilo",
      "breed": null,
      "age": null,
      "sex": null
    },
    "images": [
      {
        "id": 82,
        "image": "http://188.166.71.152/uploads/589b9d46e749f.png",
        "thumb": "http://188.166.71.152/uploads/589b9d46e749f.png"
      },
      {
        "id": 92,
        "image": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
        "thumb": "http://188.166.71.152/uploads/589b9d47293f3.jpg"
      },
      {
        "id": 102,
        "image": "http://188.166.71.152/uploads/589b9d475fa22.png",
        "thumb": "http://188.166.71.152/uploads/589b9d475fa22.png"
      },
      {
        "id": 112,
        "image": "",
        "thumb": ""
      },
      {
        "id": 122,
        "image": "",
        "thumb": ""
      }
    ]
  }
}

```

`POST {{url}}/api/v1/update_profile`

# Update Device Token

> Payload

```json
{
	"device_token":"put your device token"
}

```

> Response

```json
{
  "success": true,
  "message": "Your Device Token  has been been updated."
}

```

`POST {{url}}/api/v1/update_token`


# Add Comment

> Payload

```json
{
	"image_id":"2",
	"comment":"this is just for testing purpose"
}

```

> Response

```json
{
  "success": true,
  "message": "your image has been commented"
}

```

`POST {{url}}/api/v1/add_comment`



# Add Block

> Payload

```json
{
	"user_id":"13"
}

```

> Response

```json
{
  "success": true,
  "message": "User has been Blocked"
}

```

`POST {{url}}/api/v1/add_block`

# Add Sniff

> Payload

```json
{
	"image_id":"2"
}

```

> Response

```json
{
  "success": true,
  "message": "your image has been sniffed"
}

```

`POST {{url}}/api/v1/add_sniff`


# Add To Favourites

> Payload

```json
{
	"user_id":"19"
}

```

> Response

```json
{
  "success": true,
  "message": "User has added to Favourites"
}

```

`POST {{url}}/api/v1/add_to_favs`

# Nearby Parks

> Payload

```json
{
	"lat":"106.3468",
	"lng":"56.1304"
}

```

> Response

```json
[
  {
    "formatted_address": "New York, NY, United States",
    "geometry": {
      "location": {
        "lat": 40.7828647,
        "lng": -73.9653551
      },
      "viewport": {
        "northeast": {
          "lat": 40.818044,
          "lng": -73.9339825
        },
        "southwest": {
          "lat": 40.7473416,
          "lng": -73.9970305
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "c9bcef33f0cc85eda31f1c7444e9b1a3b82c9a9f",
    "name": "Central Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1200,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/111583076557131766621/photos\">Rafael Coninck Teigão</a>"
        ],
        "photo_reference": "CoQBdwAAAJ97Iuo3xG4EfzO0wgpSi2zrDk2YotQaINh7yGIERjjrgfsWTCxsJ5Y2hSO-VM3rI1twk8kd9YiLPFKujU1XvRqb4594W7CIBZcCDIifRcH2qdFR7I361T0JaJJ8ulpaSnBQgdyZymyqpg0iaVcBcbxoydcwbwncYAx2HKY2D4j0EhBXq7KrWjq_VU5eHCiCvbHoGhSE-2YyZtKyeCDasqtyx60Tja7fMA",
        "width": 1600
      }
    ],
    "place_id": "ChIJ4zGFAZpYwokRGUGph3Mf37k",
    "rating": 4.7,
    "reference": "CmRSAAAAJcveuzBi7ySGcxOvwUc0u6TvPkbl3tAJUrjCOpucTFTFx8dRHBvJxkHEScmNvFOOpSiCVQboxg9EctbjpU9kQ2Q7aC_eqqPqxkKkqWWlqVXfP7uGUgjPA6IuFjcKSKtLEhBjAxgkXfv1xYzwTGWv7cT5GhRWdcXlXRSRFMKgGEB6lapaTm_vXQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "3801 Discovery Park Blvd, Seattle, WA 98199, United States",
    "geometry": {
      "location": {
        "lat": 47.657302,
        "lng": -122.405496
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "ddf1e13a038880848260ddc86100dfea5f78eeee",
    "name": "Discovery Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 4000,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/116073485717477094080/photos\">Discovery Park</a>"
        ],
        "photo_reference": "CoQBdwAAALsVVa4_zzyOAmoCknHaTKBgar1sM2ntdZcqloF-MgVWMqe2DV-knQKHIE7UlRF-joKr4JTTjquRA_-NG6gcd7FIXxAC_IrKuYe3w8I3AxlyljafHvNgAB7uNTNvid2ZpvhTvEo5xaXOxBq1c4EOVaoM-C4blhFn2Djs3FurwYaeEhBFUX1e5y9xwLxGypv8LWkCGhSMv22QAUTdlDxxQIXL6sd2qMjtig",
        "width": 6000
      }
    ],
    "place_id": "ChIJn0CO4fAVkFQRIGP6pMpCmFE",
    "rating": 4.7,
    "reference": "CmRRAAAAST6vRtaHqt6g-s9jj9fv0K5N0kddiMuAnAWDk1qXqwLfFOUCkGDQ5Z601XrTdKFSx0IejZ5r6idvlFGDQ4T36LM2nUoI85wWd1wixy-F97QX3-KIEWjsOEHGPNh1431dEhD955PFeCPJIC5HTkD9REEAGhQWsRGa-HnwvOJQGLyjjW5L0ChBpQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "San Diego, CA, United States",
    "geometry": {
      "location": {
        "lat": 32.7341479,
        "lng": -117.144553
      },
      "viewport": {
        "northeast": {
          "lat": 32.75186525,
          "lng": -117.1208421
        },
        "southwest": {
          "lat": 32.70871145,
          "lng": -117.1722057
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "f5c198ede66f279c97bc9b5214f0279be0979831",
    "name": "Balboa Park",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2794,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/105356235125878965426/photos\">Josh G</a>"
        ],
        "photo_reference": "CoQBdwAAALnNyo98BMHWxhanLt56eiEL5aNoo-riK4pISsDVt2HUWILZh5vpSPNCgP4Q-AXWg9Nxq6cmEwdnZjqq3Pbm4RCXZFZTdb1uQBGZqRsrBk3swFKsWqlhy3KptQZ-_gi3928trZ2bTc5GYJ1qZ32Zv3aV1GvcUFnNVJQNhK_kMvRtEhC3iGqntFbFCHaaJ124_GgEGhRXyAisoHa9MJIMAskH3OPCL6aRIQ",
        "width": 4192
      }
    ],
    "place_id": "ChIJA8tw-pZU2YARxPYVsDwL8-0",
    "rating": 4.6,
    "reference": "CmRSAAAAcqy1Q358QR_Cjn77oaS4YYq_HpPu8IbLgx0eUYnaV3orKDu16t4clEr7iHj6bSzkgkCciNlbGwF-nVmCl1XahlsF-p2fy-bcsIbrEYCKHbswo24dPJy4aye9RV84HqZhEhB1GYNcXsYbD1TW2rQJ3wcSGhQBlNnn-FgBZaVxpVK0tKMRk2dIvw",
    "types": [
      "park",
      "museum",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "201 E Randolph St, Chicago, IL 60602, United States",
    "geometry": {
      "location": {
        "lat": 41.8825524,
        "lng": -87.6225514
      },
      "viewport": {
        "northeast": {
          "lat": 41.88610295,
          "lng": -87.6194948
        },
        "southwest": {
          "lat": 41.87909875,
          "lng": -87.6255956
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "d29a51c84dee6c600ef101fd90ac382631a24085",
    "name": "Millennium Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2304,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/105336685193092059775/photos\">Hasit Shah</a>"
        ],
        "photo_reference": "CoQBdwAAABgp2tNrYmQp4B3tSiQU-VyNweyDacVmwaSAnWC39BsZwFFeUDdKHMpWQI7YdxvaBXtvNbf_PEp9m_xYj40AbBYcADsoD56_IRdndqKAjTQ3uZFrKZo2IIMFZZNUSzwU9FPmA9_zs-GZa5ZbcApOpVxM7lcWVa-D_sDeOMIGq5VxEhArmQwM1GEVWvxDDMcf2UmGGhTCF71qn7Puu-GUUmPkljtSEbAR2g",
        "width": 3456
      }
    ],
    "place_id": "ChIJA5xPiqYsDogRBBCptdwsGEQ",
    "price_level": 0,
    "rating": 4.6,
    "reference": "CmRRAAAAQBxb5oSuhUiMk6dfCTJuy5w-5sQ9PW6rq6OpWvbz4dOvJw4Z2dyWNOqE4CDmg22qwM6xWLfDAOfeSX2AkAopuA2oqAk4yU8YvvgqDTkR8nhq-9OaV_PiHr2kNjpixfU-EhCaHW9ziVJuw26BJEmuHcT2GhQD34-H57VhZ3DV7cC_6TJB2IkRrQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "900 City Park Dr, Chesapeake, VA 23320, United States",
    "geometry": {
      "location": {
        "lat": 36.7511871,
        "lng": -76.2254291
      },
      "viewport": {
        "northeast": {
          "lat": 36.7512082,
          "lng": -76.22537745
        },
        "southwest": {
          "lat": 36.751151,
          "lng": -76.22551725
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "e0592ed9c932951ad11b7df511d5b251296b50a4",
    "name": "Chesapeake City Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2988,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/115506038277551023577/photos\">Naoma Doriguzzi</a>"
        ],
        "photo_reference": "CoQBdwAAAA8kBivvqwYAgfzzlUmsDMXEtrzsJjw3ato4SrNFDl_gxvJWIgy_5b1Bk0IiodSO1ALSxQ-gFlGvoYMsmFMTsLEy3ApLJRsVh6Do7ZGi59PgSe9jpjzzr61nKLaxU8FfMUj2r43UNRqdqS1lLR4L8LnrgF2PLAiR7BX6PnDXsFwyEhAqxl7wjTJ4RZwUMoapHUbKGhRkN2Qk96L2qc86zg1K1vHjkwzULA",
        "width": 5312
      }
    ],
    "place_id": "ChIJk55EN4C8uokRXNv-46A1y5s",
    "rating": 4.6,
    "reference": "CmRSAAAALeJJJC17TSfIyidQItId_OXZMeWPqu5urzmKDHFCa_5T30wq_Pvig89-P4-cA8dxeLaE6UktPu2jq_1GqBzbNkfOgXn1L-sJOdY962-43iExK5bCPeeJJHhCSWIFHQTcEhB1C6dnLnqQuPugDMpR4bSlGhSRcCXJvnboRPS-vJfAoomZdCAJ0g",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "5900 Lake Washington Blvd S, Seattle, WA 98118, United States",
    "geometry": {
      "location": {
        "lat": 47.5499152,
        "lng": -122.2566576
      },
      "viewport": {
        "northeast": {
          "lat": 47.5499695,
          "lng": -122.2566052
        },
        "southwest": {
          "lat": 47.5498747,
          "lng": -122.256728
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "792091b846b5d486bf1e8b86e86b035567ed5793",
    "name": "Seward Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1200,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/104357453056478255903/photos\">Seward Park</a>"
        ],
        "photo_reference": "CoQBdwAAANTpmsl8VZco3geB23dQyVj3Q66ZsuTiSITLGzwDTDEE9cpVjca_a32nUm5UwNq5JFSzh2NOWZtPlAIanM9VrmGii__Q4GfxqiAkgayWcVuhr0dt1K36WGgJCNaIs-mjlOfk0QsPpfTGfVrRMO_IUcCUsPPDnRTkD3yQrddcgRoWEhB7IVWpXwfQMg25bAqGCMSPGhRs-1MsYvMbbfKjj0fSLZPMeY5eCA",
        "width": 1600
      }
    ],
    "place_id": "ChIJ8fB3DCFqkFQRuPuGyAgceTw",
    "rating": 4.6,
    "reference": "CmRRAAAACtEVfdDCZP6nhBXF2NejbuUZXNbi4-YZHDYXRxeHgPINrdltapFJmOfDuMOh1xqa93aKnE6aHa8HVO3GKpVMkZuR_fHGi0tv5OpSaBsIsNIyEDHAkhrbiY_Wo3GbtaY8EhDAC5pPZboZe9hcS8yVHUfkGhTOiQG0GF4vfvdYaPJ-P8JVGW_4Dg",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "1028 E 6th St, Tulsa, OK 74120, United States",
    "geometry": {
      "location": {
        "lat": 36.1519347,
        "lng": -95.977805
      },
      "viewport": {
        "northeast": {
          "lat": 36.15316095,
          "lng": -95.97780415
        },
        "southwest": {
          "lat": 36.15152595,
          "lng": -95.97780755
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "7c37a4c04a171044065dca9636196d4852e33088",
    "name": "Centennial Park",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2988,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/102864080417267160996/photos\">John Taylor</a>"
        ],
        "photo_reference": "CoQBdwAAAI0Zv10SVJZothWchOoSNrzeB25v4INrVg44pmb4Lp4yhqMBNz5hZOLYXIy9Lk9bnG_5nFvXoqtWNo6VJ7tDyHSYtkUrKu_TQflGjJ0xwYRXetXQzVeb2PYY8qW5AVqsMXHrV1SCsc5Le_uLuvM5-EM_xbg0pByYm6YGb4cF6zzjEhDsJALnSNbV7-1dq0eUJ18OGhT5P0BUFMRBfOGiu1endarKQYnPUQ",
        "width": 5312
      }
    ],
    "place_id": "ChIJh-cPBoTstocRWsAZffxmo1s",
    "rating": 4.8,
    "reference": "CmRRAAAA9I94TnXXqdkN_JwnOVl3q1Wrr8JKbKLP_HrFBdD7G2CAY9Qv913Io8dHgxAhd-gbwuSPIoyQZL9j65A0PaOK8Ku21Tdgi5WHOgV5Iq1GjF08Dzpr7O_bpdk6gRQpTfQNEhAJGSRTdh7vu3ucagbWBwSAGhTvG3en56ZinjNiWpPeMx8JHa4_OQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "2100 S Fillmore St, Denver, CO 80210, United States",
    "geometry": {
      "location": {
        "lat": 39.6756847,
        "lng": -104.9529825
      },
      "viewport": {
        "northeast": {
          "lat": 39.67708135,
          "lng": -104.95291245
        },
        "southwest": {
          "lat": 39.67521915,
          "lng": -104.95319265
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "d31814aecb38e02c5bfceab4549c26ffb92a2f32",
    "name": "Observatory Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3006,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/102271069623611188897/photos\">amanda jo</a>"
        ],
        "photo_reference": "CoQBdwAAAGh4ewRQg_0yg0b-Bt9LJSao5TKD9wec0ORt1m70TzPf3HauFpd5t0ryIVNWYhczWlpUplxel0S002sadWHKdVvG24ppYy8wZML9Io2rEvQN6I-4zrNWx5Il8pIWmIU0UI-7IHxFWHsgDhH1jnwxAGEr6cJP_zUgH6ngAXIwWN7CEhCDkaK2TXxJJK_T78bNGncrGhQWXryOG1pMgOKp3PQ9iQX6imcgAQ",
        "width": 5344
      }
    ],
    "place_id": "ChIJO4L4hBF-bIcR4t7nEjodAgc",
    "rating": 4.5,
    "reference": "CmRRAAAAFRy8fifqUqyJdaWI9Tak85M5O0T2mirBifpu1bboLkfEp5aS2xhnNYJTbNn5J6rLH8pXxlSDZkdevyrPuEgjq4IaOTJC1twR0w0b_INUKMb7bhBt9UdPB3bXbt_Fen9tEhAqllnPLxXz-MFGvEMPdhQpGhTxkFjy0P-yHOTfyhQQwxqSF1daGA",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "1319 Brook Forest Dr NE, Atlanta, GA 30324, United States",
    "geometry": {
      "location": {
        "lat": 33.8177445,
        "lng": -84.3408942
      },
      "viewport": {
        "northeast": {
          "lat": 33.81854835,
          "lng": -84.3405515
        },
        "southwest": {
          "lat": 33.81747655,
          "lng": -84.3419223
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "e6e880b2a4ca6de84ccf9035fc29c201413fb71a",
    "name": "La Vista Park",
    "photos": [
      {
        "height": 3024,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/104254419146029366470/photos\">Lucinda H</a>"
        ],
        "photo_reference": "CoQBdwAAADA9wHXDgg2C-PCGy5s9O3I_m7Q0YkCkgLg7h13x4-Xsg07uSal64mEKKtf9bExwDcdCoSD6Wdo5tm9v7-Ur5-w6s6uzma3DQt8Xpca4yyIivc-LWp-Y9OY01nPeIGXz6XbL3gAWCypDPaGxIqn9Ra4PJN81EGws2cxwcKL2-ENJEhChl0o6shzW1ShWERufP6viGhSIRe8BS9QB_9oRKgCxylmI-WJTsg",
        "width": 4032
      }
    ],
    "place_id": "ChIJnfj-KmwG9YgRKm-X5CnNSHE",
    "rating": 4.2,
    "reference": "CmRRAAAAP8os9PiJcbTIE0eKQV9aO3O8p7c9Ae554Ak6b4OlPl3Sk511c9aF8B1spAtNic7G_PGXKUCgTkRgNY_xaas5RrIuCWMIrvn-LNtcijWYD2l_yr4N9cYNzLpRBxYvxypyEhBv9jSfVvkTA3lrLPa-dzi8GhTr9yc0eRA_HvHzP6A7a3IdSVal4w",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "San Francisco, CA, United States",
    "geometry": {
      "location": {
        "lat": 37.7694208,
        "lng": -122.4862138
      },
      "viewport": {
        "northeast": {
          "lat": 37.7797158,
          "lng": -122.42049265
        },
        "southwest": {
          "lat": 37.7578474,
          "lng": -122.54138605
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "26542c7c02ab2795925b9cec81f7bac6047fd102",
    "name": "Golden Gate Park",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1836,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/107189957612801137055/photos\">Esther Ng</a>"
        ],
        "photo_reference": "CoQBdwAAAABhZTlbzeatsvWakHu7N3kW1M6IpIPwft-qo-Cxb73j7hCh4awNj5AlRDSq_sTZJkbMWbMxXsUUlCcjXs2ZNVLFG3cuOb4zRmuh2gyQPtfeJrEW3v9dC15Q55Omj1BVy3ktieq9JEHgnkUXqQOQXmnO2bGaVf8GZxYv50WT4HgAEhBY3mx_nqJiIm08-EPqFkxbGhRYA7GSHYdlNRHRsr_86jZc8-jW6w",
        "width": 3264
      }
    ],
    "place_id": "ChIJY_dFYHKHhYARMKc772iLvnE",
    "price_level": 0,
    "rating": 4.6,
    "reference": "CmRRAAAAkIJOY8DU5C0VokW3RGNFOd2-6VmuRUwQJ1MEZkrHRZJTsCkDzmSy-QvjiNhtvgeNhPWSTGQAngGHSn4dQhga4UVpXKqEC3zKCVkTyOUnRREPzeyCmPqrJdiOvvORri1UEhAISuPZ5XchQsQNlQLhJg78GhTTp352v9NA5iACoOYLQ91m0osgTg",
    "types": [
      "park",
      "political",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "4630 N Milwaukee Ave, Chicago, IL 60630, United States",
    "geometry": {
      "location": {
        "lat": 41.9644919,
        "lng": -87.7586291
      },
      "viewport": {
        "northeast": {
          "lat": 41.96492195,
          "lng": -87.7577822
        },
        "southwest": {
          "lat": 41.96434855,
          "lng": -87.7589114
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "c0505b2aba23e61219aefec8c0b5fa8e0442c2ca",
    "name": "Wilson Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2988,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/111688955774105347430/photos\">Manny Pena</a>"
        ],
        "photo_reference": "CoQBdwAAAL04HeGFK81sKqHcRyLLw6-msqknqfyKzRrDYxewMLvZeW-xzzd8LycsyPFP1m2Tu9gto20VA1gxN35vcrLuSFfg5uRefFxf-bsDzMl1DL20xYdNQ1RCswjqDRk0aAOtQWIlJw6eeahDKllciL83qTU_7uQkwur68THXaus5jNP9EhAtv-WRsYbGUYv0IhlJVS8YGhTAIkURy5dEXFhxmINTQi4WQ7AEBA",
        "width": 5312
      }
    ],
    "place_id": "ChIJpd3D-xbMD4gRP-6RR2PPkPw",
    "rating": 4.3,
    "reference": "CmRSAAAApATVxSn5kMStdPErVHMHiDvp-6VGHD2u5xzCq8kh0J2EwWkOJrvYz0EHTJJO1s8IfiP7MoONUWodMI3W02HqGujdrx0d7yp35QlHbDcKIsa94O9DQkQezZSBdU_2wSOnEhB4_7U-kwRDK0zbadzdLaPVGhRUgDnlScmW30ccolIvdopwN8XEFg",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "300 N Central Park Ave, Chicago, IL 60624, United States",
    "geometry": {
      "location": {
        "lat": 41.88634,
        "lng": -87.717264
      },
      "viewport": {
        "northeast": {
          "lat": 41.88658615,
          "lng": -87.7170147
        },
        "southwest": {
          "lat": 41.88625795,
          "lng": -87.7173471
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "6b0abb6580123d744eef4138ee15ac4d97a1729b",
    "name": "Garfield Park Conservatory",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2239,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/101530144050396757339/photos\">Richard Chang</a>"
        ],
        "photo_reference": "CoQBdwAAAC-vxYSmEBenaSAMbVwgsQVMZ5NUjhqy2EF2nc7Awfeh7xWwlL8hj279Hh_RHsFdHAwIswUhYtorgsI-iRweaki0vvBkxFDijmt9WucII_pNAVfo2w_iRxTndmLx1iUTkHfDJW_FpGmbHbb9FYd7RXcJ68wCiEgYskJps-4r-YI7EhAtrr3vtUSayXe65fOCAd_2GhQ9QhcMQRy0n-RZQVUXZppp02kmXg",
        "width": 4386
      }
    ],
    "place_id": "ChIJaQUY87cyDogRqoNIaIN0IdI",
    "rating": 4.6,
    "reference": "CmRSAAAA-xXDzaymId0_QaGWpOmANedgabbGZ5ENcNZ_cWRYYUWKxz4ttNO9NGYvukzszBeqWkpJP-_4rKxShqihYlO9bthxEPtR6RCA9-opEptUvIAdUVFqdSWO8yzh0r2X9TyeEhDZ12nynDugb7SuGZ9VCpkpGhRI0AOs6NUbXDDYIDf7rrfUXlgvrQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "Estes Park, CO 80517, United States",
    "geometry": {
      "location": {
        "lat": 40.401305,
        "lng": -105.6266252
      },
      "viewport": {
        "northeast": {
          "lat": 40.40137665,
          "lng": -105.62642425
        },
        "southwest": {
          "lat": 40.40109005,
          "lng": -105.62722805
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "1d97d54cc2b98b432dcc6c005a853248a3998431",
    "name": "West Horseshoe Park",
    "photos": [
      {
        "height": 2448,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/100274993175550459461/photos\">Caleb Lusk</a>"
        ],
        "photo_reference": "CoQBdwAAAN5aJDGDcGr-xTdP4nQP6xLGIulqwlj1sQJYmng92skl7yTF-Uc62uSB8SehWKCyeACfv9JrGLHPtfiq2zQ7A9BjSqmHwPFwdpf1pWlbmRCKqSkq_tFzqMNC3YdGJPfGPS1Kgibd394VtlvBLJ5pxxcq8dFcC-jQlQlZ3qbOqrheEhA7HE43gSpZ8DsBUCO_rkuiGhQd_pA1Zr-oODhjawkitPv__D6eVA",
        "width": 3264
      }
    ],
    "place_id": "ChIJAYr6B0VwaYcRoe0ZhM0KHw0",
    "rating": 4.3,
    "reference": "CmRRAAAAczflFT5EGVX-QUxsu2KxsaHqTZdtZ-GRB4AAAO-pjlnkN6ZV8nCuydQc3wa9rmQYn3cPNb8DR_PNB155J1difhmRzrXb41ccI3Y8on1SifysWu8VxAXUmf6ysvQCOWOGEhDC1LCRpQl07OReCsTtBuMFGhTs_0oyO6F5dmWQ14unxr6WJa6oRA",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "0 camping sites near Watkins Glen State Park,, N Franklin St, Watkins Glen, NY 14891, United States",
    "geometry": {
      "location": {
        "lat": 42.3705307,
        "lng": -76.8823886
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "2c55882105d70de8589f31e19a2552a81836298a",
    "name": "Watkins Glen State Park Six Nations Camping Area",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 5312,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/102949253785672840401/photos\">Daniel Kelly</a>"
        ],
        "photo_reference": "CoQBdwAAAG8WbwC95R5nbkxuEzjgRqyO7M6Je1inUvXz_Jt1vvi0SVpIu7ugvF5c4Qf_jyi5sbjYf3465a0Lb6EVaT5O8PSYITtnNuu45v9oRSvd8PDIdUSbReAepFCotl44_fNqZUWactYL0tn9VbZ2g_HD2qhmoNZ1jPBb_w3rwZyUBgcuEhAmrpfVCP5UpP1x1_xfmSZdGhT1qLPHY9KRD8Mhq1g2xAmjtLZl-w",
        "width": 2988
      }
    ],
    "place_id": "ChIJtX6egeRe0IkR2pOYWgjO6iQ",
    "rating": 4.4,
    "reference": "CmRRAAAArzAFvY-D80h0EyywnYV2FB9wRm9osqZzrvJQnJb1ZgAcrTW5JbmxR8GpXBUAf3LUz2khw20n9F9gLHwvDsiCeq0iewoCdDuGCNxBkDAYpMzm9g4uqGcnqwhTQHv23TU_EhDqGK6ggmrkf8YzQTXgfHkDGhTt6YRYgzIY-i1TqmnfX5CBBRcrXA",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "6755 N. N Northwest Hwy, Chicago, IL 60631, United States",
    "geometry": {
      "location": {
        "lat": 42.00395,
        "lng": -87.8174821
      },
      "viewport": {
        "northeast": {
          "lat": 42.00404465,
          "lng": -87.8173742
        },
        "southwest": {
          "lat": 42.00366605,
          "lng": -87.8178058
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "9332a0afefe6b18d45a3d06d212e7bbf6407790f",
    "name": "Edison Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3024,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/108644339080133746935/photos\">Dan Panattoni</a>"
        ],
        "photo_reference": "CoQBdwAAAPq4Lj1154DhsM0G_MdKhQU1qP2NyjZn7Onq3fZ9K50JGNMKBv1gKid2xadf88CtVm8q0m_7gucCUs7Rpfh9R_IP6jRGre9EObhtjWpSrWJoM8rSEjWBSH43JZyfGlZQhnvUhCm5lcG_S6EBj6rfJBgDrxW-fF0TIqsp35TpADUuEhBC1C3eKdW2DRCAyThIo1EZGhRd9RNOO-I4FvF2SWk92dljr6ZdQA",
        "width": 4032
      }
    ],
    "place_id": "ChIJqyRQO6fJD4gRw6u3n2b6fMY",
    "rating": 4.2,
    "reference": "CmRSAAAAIn3dfeWm4y-MjfNxe685ngC20mccVdM7nICirQ1jegSxlTkUwqnk3sjKiavmyOBv2zFk5pXakBtVmpVE3F5dcWTPfBqPVjLVFHSO0BPfOn4PRRFb6ktevKa7jQRtq0etEhCV2bR6ZSLfWe4iW7JwDBORGhRRHRx8m-YUfyWuRAy2eRwMBLvKMw",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "14985 State Park Rd, Sterling, NY 13156, United States",
    "geometry": {
      "location": {
        "lat": 43.3210878,
        "lng": -76.6971659
      },
      "viewport": {
        "northeast": {
          "lat": 43.3211514,
          "lng": -76.69582535
        },
        "southwest": {
          "lat": 43.3210666,
          "lng": -76.69761275
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "831bd4b3eeb8d9a34f9988675c22ebd9206d3b37",
    "name": "Fair Haven Beach State Park",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1836,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/114615367798153290010/photos\">Joanna Furino</a>"
        ],
        "photo_reference": "CoQBdwAAACTgzNLVfz5wZYDoUOHnW5b-zRnIaQgIxVkKcT61COXKXBLQBhTr-LatyKmEK9dN2oGu0-nD1NFDzkqi5zJGDskUzC4t2CS2MiRVir3HnaUWWa0HWKkFiedZzgyoZ5EYYtrqKzCxwVvWzRbSifcKgeUPWrt0IS9euQaFDQ_5uOfuEhAIbDgHVBv8uR2ROUzURfrdGhTYAKk8HW_BSIV5dur9Mndhz5xKOg",
        "width": 3264
      }
    ],
    "place_id": "ChIJybIzPLVp14kRD0VJ8eqS8m0",
    "rating": 4.4,
    "reference": "CmRRAAAA80WPTUxpPKwi-5zHc63ZmeYSbmiVNBkxRAXXJ0qf9KpKca7RyAuqYLGsXWs6x0rMvXLhhxlJBUr7xnwj6hcew4fntP1uYlSSFmzgPrihfrlcToQXj0EjvdMzt3pBskHvEhCD9tNryyksd96x-3Q1f-mtGhRn1Zx80vJcZO01jpPbHI1mrWQkzQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "3560 Pepper Rd, Keuka Park, NY 14478, United States",
    "geometry": {
      "location": {
        "lat": 42.5819959,
        "lng": -77.1282514
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "016c3ec25920108c17a932f878ff7f5b2c435356",
    "name": "Keuka Lake State Park",
    "photos": [
      {
        "height": 2988,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/105300182907228526986/photos\">Ram Naidu</a>"
        ],
        "photo_reference": "CoQBdwAAABUzC0iRpqykpINqt8O23f54k7Z-iGSgikDXWcVBg2hmoe5TPOyBC7ceW2f8vFFusNE9z-S5e-q4vu-mATKduXUG24ETD2DCdRf18J_vpqSTlvAhqhYf6oMoj_PzAWIrkuAok1ajOKIQso5It7cU3jBFAnpyFG_nbeuusHXPeuiVEhCGpXAtYNf_tFCM0i7TvqZCGhQzXTde1n7wnagey_Z3MLbnCL9DxQ",
        "width": 5312
      }
    ],
    "place_id": "ChIJf0KtI8D80IkRjBcSawt8PSw",
    "rating": 4.3,
    "reference": "CmRRAAAAU7CJMe0xXYbZVJT0k2y05RLJ8ywTVOcL2e7dHwDm2djWhK53Bx6PFV1BthVQXiFo2P0r5exCGNAOw8o23HWFxnQKQRZkcMYukQYhdENxmjNMga2j2h6IerI-2_YsRjROEhA8-962CxishtkUEpNr5Q6mGhQtEIXhzioRhKNImpU_KPb2sOD8jw",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "Chicago, IL 60609, United States",
    "geometry": {
      "location": {
        "lat": 41.8266575,
        "lng": -87.6275845
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "65c1b2404660a742532fa79b155dd660b88344a3",
    "name": "Stateway Park",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "place_id": "ChIJl5vO7w8sDogRi70G90hC1uI",
    "reference": "CmRSAAAA6tT1h48xxQ7mag1PciBR7obPs5RhLDRmOXoW7R0HfActjgv-DPZirhbo20r5HxP7US_0s0Gt0QEZpmtySp1-7fgB2QjzW6yFAPW_Rl3wk6rtLpi3s6ASN_bZ0hiIdobeEhD2xWpj8j_eoUFrclTYc78nGhRVA76MtdNeyc2I6wHPrzZT6xLd_A",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "W Delta Park, Portland, OR 97217, United States",
    "geometry": {
      "location": {
        "lat": 45.6056358,
        "lng": -122.6931468
      },
      "viewport": {
        "northeast": {
          "lat": 45.60564805,
          "lng": -122.69302255
        },
        "southwest": {
          "lat": 45.60559905,
          "lng": -122.69318835
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "5516181819622e39a398597517bacff6e218f1bc",
    "name": "Delta Park Sports Office - Portland Parks & Recreation",
    "place_id": "ChIJfW6fHjCmlVQRwgIdtLugUU4",
    "reference": "CmRRAAAAwR1ULIfO-_hxfsB0CaLiRN68oq5tjN4zdTZDBHixB2rMcOfB0gH4g4ARpvs9Q0e2t2WZ9vvIpF9mMMfmg-25q8QJqmwvGYSjRZL3Kg0cf_YF9E6e8-ctmI6u_65DkmYPEhCJbmlWv9NsD0Ju8TIS6oVDGhQ4XdyUIa-ZbarM-z9pbo5JG_SSdQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  },
  {
    "formatted_address": "1150 Frame Park Dr, Waukesha, WI 53186, United States",
    "geometry": {
      "location": {
        "lat": 43.0180937,
        "lng": -88.2237815
      },
      "viewport": {
        "northeast": {
          "lat": 43.0184198,
          "lng": -88.2223736
        },
        "southwest": {
          "lat": 43.0171154,
          "lng": -88.2242508
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
    "id": "f9ffbf0a71dc1ba41369fe8c345ac3d032c3db25",
    "name": "Frame Park Formal Gardens",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3024,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/101299938608322809828/photos\">hailey s</a>"
        ],
        "photo_reference": "CoQBdwAAAJbTEZwvBH4Rv4iNU_pHQraZy-EoqL0xYiEu0FuUn2j6jGdZqB6YxUtG_0jAlnArkIi_5RKX69FGHbq90vcN2gO4UqlQbPdOWslHfSO_HAnhYRwoM1oA5QDCMqGgXPQB11EWtAVsZj7p67sw9-kg87SIcitF-j2ja7DLs7VevVE9EhAEydF32GKTu0ejskB3BjK_GhQxmX3sQmnlup5UG1UMrFJ0HHIbhQ",
        "width": 4032
      }
    ],
    "place_id": "ChIJbcNB05CoBYgRxfqgHNAZK1w",
    "rating": 4.7,
    "reference": "CmRRAAAAkW8BqMkg5LK2GObAIiIVBubNCKU3zKzTPLzk9PRzcWQGTw9_Y16UmwyxAUqO8dSHTaW7sNJ0rec8lsfFrMYMbGpWmlbDVkpsZM3cQeP8wJirehEmbUdTo65pCO4i3rThEhAiNHrsG-8kV8tS-Gl69EajGhRINJBgif7d2dKLVbDt5vwvlWmueQ",
    "types": [
      "park",
      "point_of_interest",
      "establishment"
    ]
  }
]

```

`POST {{url}}/api/v1/nearby_parks`

# Nearby Users

> Payload

```json
{
	"lat":"30.0444",
	"lng":"31.2357"
}

```

> Response

```json
[
  {
    "id": 8,
    "username": "",
    "email": "emad@test.com",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "iweywgsjaknskagsgahjlwjuqwghqjkwjqjwvqtwygqh",
    "date_of_birth": "24-09-1994",
    "profession": "developer",
    "relationship_status": "single",
    "city": "Cairo Governorate",
    "first_name": "emad",
    "last_name": "elmogy",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "7zxZTkeiOD5qIcK2GBiWb5iHxhG3JhTo06vUhNBJ",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": null
  },
  {
    "id": 13,
    "username": "",
    "email": "emad@test.net",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "ghbsajsnakshajsjasashasaj",
    "date_of_birth": "24-09-1994",
    "profession": "developer",
    "relationship_status": "single",
    "city": "Cairo Governorate",
    "first_name": "test",
    "last_name": "test test",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "p0cfl4M9PSVSd3gilzCndgKGdEPyreYlr3ykdCer",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": null
  },
  {
    "id": 14,
    "username": "",
    "email": "emad@mail.com",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "mcbmxbcmxnghbsajsnakshajsjasashasajksjaksajsaksjkaskjasnamsbnabs",
    "date_of_birth": "24-09-1994",
    "profession": "developer",
    "relationship_status": "single",
    "city": "Cairo Governorate",
    "first_name": "test4",
    "last_name": "test test4",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "R8bxGzk36vmvFzsGl4AugdnkO6D5icXmNy11dWYt",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": "998877"
  },
  {
    "id": 15,
    "username": "",
    "email": "emad@mail.co",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "uewiuriesbdnsdbsmdnsmdnansmaslsaasqkjq",
    "date_of_birth": "24-09-1994",
    "profession": "developer",
    "relationship_status": "single",
    "city": "Cairo Governorate",
    "first_name": "test5",
    "last_name": "test test5",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "7DTTxJzzbt4tGOhYRfE0LELgUfEZoJ45pxMPdcpN",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": "511565"
  },
  {
    "id": 16,
    "username": "",
    "email": "shawaf@test.com",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "jhdjwhjdlejjdahjskahaukjsAKKHSFKAKSKSD",
    "date_of_birth": "24-09-1994",
    "profession": "developer",
    "relationship_status": "single",
    "city": "Cairo Governorate",
    "first_name": "shawaf",
    "last_name": "shawaf mohamed",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "HCKXAeaeEVTcVzHou16Yi2gXsOsx3ibJoePYoL00",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": "511565"
  },
  {
    "id": 17,
    "username": "",
    "email": "salma@test.com",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "akndjsnamlqjwjqhwjqlwkqkwhqkwkql",
    "date_of_birth": "22-09-1994",
    "profession": "manager",
    "relationship_status": "married",
    "city": "Cairo Governorate",
    "first_name": "salma",
    "last_name": "salma shehata",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "mjeFGZ6l1ivJjy6hwfA6LMBeiC2iMMrBymL1yyWZ",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": "853123"
  },
  {
    "id": 19,
    "username": "",
    "email": "salma@test.co.uk",
    "password": "123456",
    "gender": "male",
    "description": null,
    "device_token": "akndjsnamlqjwjqhwjqlwkqkwhqkwkqlsnsansknsa",
    "date_of_birth": "22-09-1994",
    "profession": "manager",
    "relationship_status": "married",
    "city": "Cairo Governorate",
    "first_name": "salma",
    "last_name": "salma shehata",
    "lat": "30.0444",
    "lng": "31.2357",
    "api_token": "MhrFjniPUKUIPTwevjx7wecmO9DkPCULGlhulNS3",
    "created_at": null,
    "updated_at": null,
    "confirm_code": null,
    "country_code": "853123"
  }
]

```

`POST {{url}}/api/v1/nearby_users`

# Newest And Nearby

> Payload

```json
{
	"lat":"30.0444",
	"lng":"31.2357"
}

```

> Response

```json
{
  "success": 1,
  "newest_users": [
    {
      "id": 30,
      "first_name": "Salma",
      "lng": "-122.135143",
      "lat": "37.420330",
      "is_favourited": false,
      "images": [
        {
          "id": 22,
          "image": "http://188.166.71.152/uploads/58955e2e4f862.jpeg",
          "thumb": "http://188.166.71.152/uploads/58955e2e4f862.jpeg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 31,
      "first_name": "Mohamed",
      "lng": "-80.103366011",
      "lat": "43.30449481122001",
      "is_favourited": false,
      "images": [
        {
          "id": 23,
          "image": "http://188.166.71.152/uploads/589600e880a7f.jpg",
          "thumb": "http://188.166.71.152/uploads/589600e880a7f.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 32,
      "first_name": "Mohamed",
      "lng": "-80.103366011",
      "lat": "43.30449481122001",
      "is_favourited": false,
      "images": [
        {
          "id": 24,
          "image": "http://188.166.71.152/uploads/5896059aed1ea.jpg",
          "thumb": "http://188.166.71.152/uploads/5896059aed1ea.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 33,
      "first_name": "Mohamed",
      "lng": "-80.103366011",
      "lat": "43.30449481122001",
      "is_favourited": false,
      "images": [
        {
          "id": 25,
          "image": "http://188.166.71.152/uploads/58960a6c740d3.jpg",
          "thumb": "http://188.166.71.152/uploads/58960a6c740d3.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 34,
      "first_name": "mohamed2",
      "lng": "-80.101222011",
      "lat": "43.30111001122001",
      "is_favourited": false,
      "images": [
        {
          "id": 26,
          "image": "http://188.166.71.152/uploads/589611c8c367b.jpg",
          "thumb": "http://188.166.71.152/uploads/589611c8c367b.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 35,
      "first_name": "mohamed23",
      "lng": "31.2357",
      "lat": "30.0444",
      "is_favourited": false,
      "images": [
        {
          "id": 27,
          "image": "http://188.166.71.152/uploads/58963049508e4.jpg",
          "thumb": "http://188.166.71.152/uploads/58963049508e4.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 42,
      "first_name": "cm",
      "lng": "31.2357",
      "lat": "30.0444",
      "is_favourited": false,
      "images": [
        {
          "id": 32,
          "image": "http://188.166.71.152/uploads/589a26b623d74.jpg",
          "thumb": "http://188.166.71.152/uploads/589a26b623d74.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 52,
      "first_name": "emad",
      "lng": "31.2357",
      "lat": "30.0444",
      "is_favourited": false,
      "images": [
        {
          "id": 42,
          "image": "http://188.166.71.152/uploads/589a290a9ce89.jpg",
          "thumb": "http://188.166.71.152/uploads/589a290a9ce89.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 62,
      "first_name": "emad",
      "lng": "31.2357",
      "lat": "30.0444",
      "is_favourited": false,
      "images": [
        {
          "id": 52,
          "image": "http://188.166.71.152/uploads/589a29362a96e.jpg",
          "thumb": "http://188.166.71.152/uploads/589a29362a96e.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 72,
      "first_name": "randal",
      "lng": "31.2357",
      "lat": "30.0444",
      "is_favourited": false,
      "images": [
        {
          "id": 62,
          "image": "http://188.166.71.152/uploads/589b6ec2adffc.png",
          "thumb": "http://188.166.71.152/uploads/589b6ec2adffc.png",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 82,
      "first_name": "omar",
      "lng": null,
      "lat": null,
      "is_favourited": false,
      "images": [
        {
          "id": 72,
          "image": "http://188.166.71.152/uploads/589b775de5d6a.jpg",
          "thumb": "http://188.166.71.152/uploads/589b775de5d6a.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 92,
      "first_name": "john",
      "lng": null,
      "lat": null,
      "is_favourited": false,
      "images": [
        {
          "id": 82,
          "image": "http://188.166.71.152/uploads/589b9d46e749f.png",
          "thumb": "http://188.166.71.152/uploads/589b9d46e749f.png",
          "is_sniffed": false,
          "num_of_sniffs": 0
        },
        {
          "id": 92,
          "image": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
          "thumb": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 1
        },
        {
          "id": 102,
          "image": "http://188.166.71.152/uploads/589b9d475fa22.png",
          "thumb": "http://188.166.71.152/uploads/589b9d475fa22.png",
          "is_sniffed": false,
          "num_of_sniffs": 0
        },
        {
          "id": 112,
          "image": "",
          "thumb": ""
        },
        {
          "id": 122,
          "image": "",
          "thumb": ""
        }
      ]
    }
  ],
  "nearby_users": [
    {
      "id": 28,
      "first_name": "testname",
      "lat": "43.30111001122001",
      "lng": "-80.101222011",
      "country": "Canada",
      "is_favourited": false,
      "images": [
        {
          "id": 20,
          "image": "http://188.166.71.152/uploads/589113bd43ea6.jpg",
          "thumb": "http://188.166.71.152/uploads/589113bd43ea6.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 29,
      "first_name": "mohamed",
      "lat": "43.30111001122001",
      "lng": "-80.101222011",
      "country": "Canada",
      "is_favourited": false,
      "images": [
        {
          "id": 21,
          "image": "http://188.166.71.152/uploads/589117928e80c.jpg",
          "thumb": "http://188.166.71.152/uploads/589117928e80c.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 1
        }
      ]
    },
    {
      "id": 31,
      "first_name": "Mohamed",
      "lat": "43.30449481122001",
      "lng": "-80.103366011",
      "country": "Canada",
      "is_favourited": false,
      "images": [
        {
          "id": 23,
          "image": "http://188.166.71.152/uploads/589600e880a7f.jpg",
          "thumb": "http://188.166.71.152/uploads/589600e880a7f.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 32,
      "first_name": "Mohamed",
      "lat": "43.30449481122001",
      "lng": "-80.103366011",
      "country": "Canada",
      "is_favourited": false,
      "images": [
        {
          "id": 24,
          "image": "http://188.166.71.152/uploads/5896059aed1ea.jpg",
          "thumb": "http://188.166.71.152/uploads/5896059aed1ea.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 33,
      "first_name": "Mohamed",
      "lat": "43.30449481122001",
      "lng": "-80.103366011",
      "country": "Canada",
      "is_favourited": false,
      "images": [
        {
          "id": 25,
          "image": "http://188.166.71.152/uploads/58960a6c740d3.jpg",
          "thumb": "http://188.166.71.152/uploads/58960a6c740d3.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 34,
      "first_name": "mohamed2",
      "lat": "43.30111001122001",
      "lng": "-80.101222011",
      "country": "Canada",
      "is_favourited": false,
      "images": [
        {
          "id": 26,
          "image": "http://188.166.71.152/uploads/589611c8c367b.jpg",
          "thumb": "http://188.166.71.152/uploads/589611c8c367b.jpg",
          "is_sniffed": false,
          "num_of_sniffs": 0
        }
      ]
    }
  ]
}

```

`POST {{url}}/api/v1/newest_and_nearby`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.

# Add Image Or Video

> Payload

```json
{
	"file_type":"image",
	"image": "image.jpg",
	"caption":"test caption",
	"lat":"30.0444",
  "lng":"31.2357"
}

```

> Response

```json
{
  "success": 1,
  "message": "upload process has done succssfully.",
  "post": "http://sniffrmedia.com/uploads/58fcb92bccd7e.jpg"
}

```

`POST {{url}}/api/v1/add_image_or_video`

`file_type` parameter has two options

- image
- video

if the type is image send `image` parameter , if the type is video send the `video` parameter

# Remove Sniff

> Payload

```json
{
	"image_id":"2"
}
```

> Response

```json
{
  "success": 1,
  "message": "sniff has been removed"
}

```

`POST {{url}}/api/v1/remove_sniff`


# Remove Comment

> Payload

```json
{
	"comment_id":"2"
}
```

> Response

```json
{
  "success": 1,
  "message": "comment has been removed"
}

```

`POST {{url}}/api/v1/remove_comment`


# Remove Post

> Payload

```json
{
	"post_id":"2"
}
```

> Response

```json
{
  "success": 1,
  "message": "Post has been removed"
}

```

`POST {{url}}/api/v1/remove_post`


# Remove Chat

> Payload

```json
{
	"conv_id":"2"
}
```

> Response

```json
{
  "success": 1,
  "message": "conversation has been removed"
}

```

`POST {{url}}/api/v1/remove_chat`


# View Profile

> Payload

```json
{
	"user_id":"92"
}

```

> Response

```json

{
  "success": 1,
  "user": {
    "id": 92,
    "date_of_birth": null,
    "profession": null,
    "relationship_status": null,
    "first_name": "john",
    "lat": null,
    "lng": null,
    "country": "Egypt",
    "is_favourited": false,
    "dog": {
      "id": 92,
      "name": "lilo",
      "breed": null,
      "age": null,
      "sex": null
    },
    "images": [
      {
        "image": "http://188.166.71.152/uploads/589b9d46e749f.png",
        "thumb": "http://188.166.71.152/uploads/589b9d46e749f.png",
        "is_sniffed": false,
        "number_of_sniffs": 0
      },
      {
        "image": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
        "thumb": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
        "is_sniffed": true,
        "number_of_sniffs": 1
      },
      {
        "image": "http://188.166.71.152/uploads/589b9d475fa22.png",
        "thumb": "http://188.166.71.152/uploads/589b9d475fa22.png",
        "is_sniffed": false,
        "number_of_sniffs": 0
      },
      {
        "image": "",
        "thumb": ""
      },
      {
        "image": "",
        "thumb": ""
      }
    ]
  }
}

```

`POST {{url}}/api/v1/view_profile`


# Add NewsFeed Sniff

> Payload

```json
{
	"newsfeed_id":"1"
}

```

> Response

```json
{
  "success": 1,
  "message": "Process done Successfully"
}

```

`POST {{url}}/api/v1/add_newsfeed_sniff`

# Remove NewsFeed Sniff

> Payload

```json
{
	"newsfeed_id":"2"
}
```

> Response

```json
{
  "success": 1,
  "message": "sniff has been removed"
}

```

`POST {{url}}/api/v1/remove_newsfeed_sniff`

# NewsFeed Api

> Response

```json

{
  "success": 1,
  "favs_list": [
    {
      "id": 1,
      "thumb": "http://localhost:8000/uploads",
      "caption": "test test",
      "created_at": "2017-02-02 14:45:24",
      "video": "http://localhost:8000/uploads/588f86a2e3b9b.mp4",
      "is_liked": 1,
      "num_of_sniffs": 1,
      "num_of_comments": 0,
      "user": {
        "id": 8,
        "first_name": "test1",
        "thumb": "http://localhost:8000/uploads/5890e27a86428.jpg"
      }
    },
    {
      "id": 2,
      "thumb": "http://localhost:8000/uploads",
      "caption": "test caption",
      "created_at": "2017-02-02 14:45:24",
      "video": "http://localhost:8000/uploads/58925e39d825a.mp4",
      "is_liked": 1,
      "num_of_sniffs": 3,
      "num_of_comments": 1,
      "user": {
        "id": 8,
        "first_name": "test1",
        "thumb": "http://localhost:8000/uploads/5890e27a86428.jpg"
      }
    },
    {
      "id": 3,
      "thumb": "http://localhost:8000/uploads/58925e880599b.png",
      "caption": "test caption",
      "created_at": "2017-02-02 14:45:24",
      "image": "http://localhost:8000/uploads/58925e880599b.png",
      "is_liked": 1,
      "num_of_sniffs": 1,
      "num_of_comments": 0,
      "user": {
        "id": 8,
        "first_name": "test1",
        "thumb": "http://localhost:8000/uploads/5890e27a86428.jpg"
      }
    },
    {
      "id": 4,
      "thumb": "http://localhost:8000/uploads/58932a64b4941.jpg",
      "caption": "test caption 2",
      "created_at": "2017-02-02 14:47:32",
      "image": "http://localhost:8000/uploads/58932a64b4941.jpg",
      "is_liked": 0,
      "num_of_sniffs": 0,
      "num_of_comments": 0,
      "user": {
        "id": 8,
        "first_name": "test1",
        "thumb": "http://localhost:8000/uploads/5890e27a86428.jpg"
      }
    }
  ]
}

```
`POST {{url}}/api/v1/news_feed`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.

# List Comments API

> Payload

```json
{
	"media_id":"2"
}

```

> Response

```json
{
  "success": 1,
  "comments": [
    {
      "comment": "this is just for testing",
      "created_at": null,
      "customer": {
        "id": 9,
        "images": {
					"image": "http://localhost:8000/uploads/587b66108d96c.jpg",
          "thumb": "http://localhost:8000/uploads/587b66108d96c.jpg"
        }
      }
    },
    {
      "comment": "this is just for testing again",
      "created_at": "2017-02-02 00:00:00",
      "customer": {
        "id": 14,
        "images": {
          "image": "http://localhost:8000/uploads/587b66108d96c.jpg",
          "thumb": "http://localhost:8000/uploads/587b66108d96c.jpg"
        }
      }
    }
  ]
}

```

`POST {{url}}/api/v1/list_comments`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.


# Notifications Center

> Response

```json

{
  "success": 1,
  "notifications": [
    {
      "id": 132,
      "status": "unseen",
      "type": "comment",
      "created_at": "2017-02-07 00:09:50",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "media_id": 22,
      "media_url": "http://188.166.71.152/uploads/589726ede8c02.jpeg"
    },
    {
      "id": 122,
      "status": "unseen",
      "type": "comment",
      "created_at": "2017-02-07 00:08:50",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "media_id": 22,
      "media_url": "http://188.166.71.152/uploads/589726ede8c02.jpeg"
    },
    {
      "id": 112,
      "status": "unseen",
      "type": "comment",
      "created_at": "2017-02-06 23:33:52",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "media_id": 22,
      "media_url": "http://188.166.71.152/uploads/589726ede8c02.jpeg"
    },
    {
      "id": 102,
      "status": "unseen",
      "type": "newsfeed_sniff",
      "created_at": "2017-02-06 21:34:36",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "media_id": 14,
      "media_url": "http://188.166.71.152/uploads/5894a4c2a8629.jpeg"
    },
    {
      "id": 92,
      "status": "unseen",
      "type": "newsfeed_sniff",
      "created_at": "2017-02-06 21:33:46",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "media_id": 12,
      "media_url": "http://188.166.71.152/uploads/5894a3f8c5380.jpeg"
    },
    {
      "id": 62,
      "status": "unseen",
      "type": "add_to_favs",
      "created_at": "2017-02-06 21:31:11",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "user_id": 25
    },
    {
      "id": 52,
      "status": "unseen",
      "type": "sniff_profile",
      "created_at": "2017-02-06 21:29:27",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "image_id": 9,
      "image": "http://188.166.71.152/uploads/589751f58696f.jpg"
    },
    {
      "id": 42,
      "status": "unseen",
      "type": "comment",
      "created_at": "2017-02-06 21:27:52",
      "first_name": "ahmed",
      "user_image": "http://188.166.71.152/uploads/58908766197af.jpg",
      "media_id": 22,
      "media_url": "http://188.166.71.152/uploads/589726ede8c02.jpeg"
    }
  ]
}

```

`POST {{url}}/api/v1/notifications`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.

# Favourites List

> Response

```json
{
  "success": 1,
  "fav_users": [
    {
      "user": {
        "username": "test",
        "first_name": "Nirmen",
        "last_name": "Jacky"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/588f8e0cc5b09.jpeg",
        "thumb": "http://188.166.71.152/uploads/588f8e0cc5b09.jpeg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "Salma",
        "last_name": "Sh"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58955e2e4f862.jpeg",
        "thumb": "http://188.166.71.152/uploads/58955e2e4f862.jpeg"
      }
    },
    {
      "user": {
        "username": "Marmra Paly",
        "first_name": "Marmra",
        "last_name": "Paly"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589363290efed.jpeg",
        "thumb": "http://188.166.71.152/uploads/589363290efed.jpeg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "mohamed2",
        "last_name": "shawaf2"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589611c8c367b.jpg",
        "thumb": "http://188.166.71.152/uploads/589611c8c367b.jpg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "Elliot",
        "last_name": "Milo"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/5886571ab3417.jpg",
        "thumb": "http://188.166.71.152/uploads/5886571ab3417.jpg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "Salma",
        "last_name": "Sh"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58955e2e4f862.jpeg",
        "thumb": "http://188.166.71.152/uploads/58955e2e4f862.jpeg"
      }
    },
    {
      "user": {
        "username": "emadelmogy",
        "first_name": "emad",
        "last_name": "elmogy"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589a29362a96e.jpg",
        "thumb": "http://188.166.71.152/uploads/589a29362a96e.jpg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "testname",
        "last_name": "testlast"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589113bd43ea6.jpg",
        "thumb": "http://188.166.71.152/uploads/589113bd43ea6.jpg"
      }
    },
    {
      "user": {
        "username": "johnnitri",
        "first_name": "omar",
        "last_name": "ayman"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589b775de5d6a.jpg",
        "thumb": "http://188.166.71.152/uploads/589b775de5d6a.jpg"
      }
    },
    {
      "user": {
        "username": "emadelmogy",
        "first_name": "emad",
        "last_name": "elmogy"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589a29362a96e.jpg",
        "thumb": "http://188.166.71.152/uploads/589a29362a96e.jpg"
      }
    },
    {
      "user": {
        "username": "randalcowboy",
        "first_name": "randal",
        "last_name": "cowboy"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589b6ec2adffc.png",
        "thumb": "http://188.166.71.152/uploads/589b6ec2adffc.png"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "mohamed",
        "last_name": "shawaf"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589117928e80c.jpg",
        "thumb": "http://188.166.71.152/uploads/589117928e80c.jpg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "mohamed2",
        "last_name": "shawaf2"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589611c8c367b.jpg",
        "thumb": "http://188.166.71.152/uploads/589611c8c367b.jpg"
      }
    },
    {
      "user": {
        "username": "test",
        "first_name": "mohamed",
        "last_name": "shawaf"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589117928e80c.jpg",
        "thumb": "http://188.166.71.152/uploads/589117928e80c.jpg"
      }
    },
    {
      "user": {
        "username": "cmpunk",
        "first_name": "cm",
        "last_name": "punk"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589a26b623d74.jpg",
        "thumb": "http://188.166.71.152/uploads/589a26b623d74.jpg"
      }
    },
    {
      "user": {
        "username": "emadelmogy",
        "first_name": "emad",
        "last_name": "elmogy"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/589a29362a96e.jpg",
        "thumb": "http://188.166.71.152/uploads/589a29362a96e.jpg"
      }
    }
  ],
  "all_users": [
    {
      "id": 1,
      "username": "test",
      "first_name": "Abdelahad",
      "last_name": "Darwish",
      "images": []
    },
    {
      "id": 2,
      "username": "test",
      "first_name": "Rosie",
      "last_name": "Milo",
      "images": []
    },
    {
      "id": 4,
      "username": "test",
      "first_name": "RosieMalik",
      "last_name": "Milo1",
      "images": []
    },
    {
      "id": 5,
      "username": "test",
      "first_name": "Elliot",
      "last_name": "Milo",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/5886571ab3417.jpg",
          "thumb": "http://188.166.71.152/uploads/5886571ab3417.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 7,
      "username": "test",
      "first_name": "Malibu",
      "last_name": "Nora",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58876841b320a.jpeg",
          "thumb": "http://188.166.71.152/uploads/58876841b320a.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 8,
      "username": "test",
      "first_name": "E",
      "last_name": "E",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588768fcdf90a.jpeg",
          "thumb": "http://188.166.71.152/uploads/588768fcdf90a.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 9,
      "username": "test",
      "first_name": "Tokah",
      "last_name": "Mila",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/5889edf17585c.png",
          "thumb": "http://188.166.71.152/uploads/5889edf17585c.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 10,
      "username": "test",
      "first_name": "Norhana",
      "last_name": "Jacky",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/5889ef57aa044.jpg",
          "thumb": "http://188.166.71.152/uploads/5889ef57aa044.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 11,
      "username": "Marmra Paly",
      "first_name": "Marmra",
      "last_name": "Paly",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589363290efed.jpeg",
          "thumb": "http://188.166.71.152/uploads/589363290efed.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 12,
      "username": "test",
      "first_name": "Nady",
      "last_name": "Mortada",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588b0bd3cf40c.jpeg",
          "thumb": "http://188.166.71.152/uploads/588b0bd3cf40c.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 13,
      "username": "test",
      "first_name": "Marmra",
      "last_name": "Paly",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589751f58696f.jpg",
          "thumb": "http://188.166.71.152/uploads/589751f58696f.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 14,
      "username": "test",
      "first_name": "Marwan",
      "last_name": "Rony",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588b347559387.jpeg",
          "thumb": "http://188.166.71.152/uploads/588b347559387.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 15,
      "username": "test",
      "first_name": "emad",
      "last_name": "emad elmogy",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588b85ea14c0b.jpg",
          "thumb": "http://188.166.71.152/uploads/588b85ea14c0b.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 16,
      "username": "test",
      "first_name": "emad",
      "last_name": "emad elmogy",
      "images": []
    },
    {
      "id": 17,
      "username": "test",
      "first_name": "emad",
      "last_name": "emad elmogy",
      "images": []
    },
    {
      "id": 18,
      "username": "test",
      "first_name": "emad",
      "last_name": "emad elmogy",
      "images": []
    },
    {
      "id": 19,
      "username": "test",
      "first_name": "emad",
      "last_name": "emad elmogy",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588b8ec655ab8.jpg",
          "thumb": "http://188.166.71.152/uploads/588b8ec655ab8.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 20,
      "username": "test",
      "first_name": "emad",
      "last_name": "emad elmogy",
      "images": []
    },
    {
      "id": 21,
      "username": "test",
      "first_name": "Merna",
      "last_name": "Wallid",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588f7fe46c425.jpeg",
          "thumb": "http://188.166.71.152/uploads/588f7fe46c425.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 22,
      "username": "test",
      "first_name": "Nirmen",
      "last_name": "Jacky",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588f8e0cc5b09.jpeg",
          "thumb": "http://188.166.71.152/uploads/588f8e0cc5b09.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 23,
      "username": "test",
      "first_name": "emad4",
      "last_name": "emad elmogy5",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588f8f991a664.jpg",
          "thumb": "http://188.166.71.152/uploads/588f8f991a664.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 24,
      "username": "test",
      "first_name": "emad41",
      "last_name": "emad elmogy52",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/588faa971920f.jpg",
          "thumb": "http://188.166.71.152/uploads/588faa971920f.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 25,
      "username": "test",
      "first_name": "ahmed",
      "last_name": "ahmed",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58908766197af.jpg",
          "thumb": "http://188.166.71.152/uploads/58908766197af.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 26,
      "username": "test",
      "first_name": "testname",
      "last_name": "testlast",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58910f5876eac.jpg",
          "thumb": "http://188.166.71.152/uploads/58910f5876eac.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 27,
      "username": "test",
      "first_name": "testname",
      "last_name": "testlast",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589111b8652ae.jpg",
          "thumb": "http://188.166.71.152/uploads/589111b8652ae.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 28,
      "username": "test",
      "first_name": "testname",
      "last_name": "testlast",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589113bd43ea6.jpg",
          "thumb": "http://188.166.71.152/uploads/589113bd43ea6.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 29,
      "username": "test",
      "first_name": "mohamed",
      "last_name": "shawaf",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589117928e80c.jpg",
          "thumb": "http://188.166.71.152/uploads/589117928e80c.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 30,
      "username": "test",
      "first_name": "Salma",
      "last_name": "Sh",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58955e2e4f862.jpeg",
          "thumb": "http://188.166.71.152/uploads/58955e2e4f862.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 31,
      "username": "test",
      "first_name": "Mohamed",
      "last_name": "Elshawaf",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589600e880a7f.jpg",
          "thumb": "http://188.166.71.152/uploads/589600e880a7f.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 32,
      "username": "test",
      "first_name": "Mohamed",
      "last_name": "Elshawaf",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/5896059aed1ea.jpg",
          "thumb": "http://188.166.71.152/uploads/5896059aed1ea.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 33,
      "username": "test",
      "first_name": "Mohamed",
      "last_name": "Elshawaf",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58960a6c740d3.jpg",
          "thumb": "http://188.166.71.152/uploads/58960a6c740d3.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 34,
      "username": "test",
      "first_name": "mohamed2",
      "last_name": "shawaf2",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589611c8c367b.jpg",
          "thumb": "http://188.166.71.152/uploads/589611c8c367b.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 35,
      "username": "test",
      "first_name": "mohamed23",
      "last_name": "shawafs",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58963049508e4.jpg",
          "thumb": "http://188.166.71.152/uploads/58963049508e4.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 42,
      "username": "cmpunk",
      "first_name": "cm",
      "last_name": "punk",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589a26b623d74.jpg",
          "thumb": "http://188.166.71.152/uploads/589a26b623d74.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 52,
      "username": "emadelmogy",
      "first_name": "emad",
      "last_name": "elmogy",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589a290a9ce89.jpg",
          "thumb": "http://188.166.71.152/uploads/589a290a9ce89.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 62,
      "username": "emadelmogy",
      "first_name": "emad",
      "last_name": "elmogy",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589a29362a96e.jpg",
          "thumb": "http://188.166.71.152/uploads/589a29362a96e.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 72,
      "username": "randalcowboy",
      "first_name": "randal",
      "last_name": "cowboy",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589b6ec2adffc.png",
          "thumb": "http://188.166.71.152/uploads/589b6ec2adffc.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 82,
      "username": "johnnitri",
      "first_name": "omar",
      "last_name": "ayman",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589b775de5d6a.jpg",
          "thumb": "http://188.166.71.152/uploads/589b775de5d6a.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 92,
      "username": "johncena",
      "first_name": "john",
      "last_name": "cena",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589b9d46e749f.png",
          "thumb": "http://188.166.71.152/uploads/589b9d46e749f.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
          "thumb": "http://188.166.71.152/uploads/589b9d47293f3.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "http://188.166.71.152/uploads/589b9d475fa22.png",
          "thumb": "http://188.166.71.152/uploads/589b9d475fa22.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 102,
      "username": "deanambrose",
      "first_name": "dean",
      "last_name": "ambrose",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589dc15818220.jpg",
          "thumb": "http://188.166.71.152/uploads/589dc15818220.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 112,
      "username": "romanreigns",
      "first_name": "roman",
      "last_name": "reigns",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589dc1e4bd419.png",
          "thumb": "http://188.166.71.152/uploads/589dc1e4bd419.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 122,
      "username": "romanreigns",
      "first_name": "roman",
      "last_name": "reigns",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589e28f38aaf0.png",
          "thumb": "http://188.166.71.152/uploads/589e28f38aaf0.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 132,
      "username": "andrethegiant",
      "first_name": "andre",
      "last_name": "thegiant",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589f67bcadcdf.png",
          "thumb": "http://188.166.71.152/uploads/589f67bcadcdf.png",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 133,
      "username": "ahmedsaber",
      "first_name": "ahmed",
      "last_name": "saber",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/589fa18a5fe3d.jpg",
          "thumb": "http://188.166.71.152/uploads/589fa18a5fe3d.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 134,
      "username": "dinaelshaer",
      "first_name": "dina",
      "last_name": "elshaer",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0afe2ac1f2.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0afe2ac1f2.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 135,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0b3b77d7ba.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0b3b77d7ba.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 136,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0b465bc241.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0b465bc241.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 137,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0b59e214dd.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0b59e214dd.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 138,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0b6dc1b3f7.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0b6dc1b3f7.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 139,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0b988f13bd.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0b988f13bd.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 140,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0bb3240605.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0bb3240605.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 141,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0bd04870fb.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0bd04870fb.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 142,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0bedf49438.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0bedf49438.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 143,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0c2b43566e.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0c2b43566e.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 144,
      "username": "AhmedAskar",
      "first_name": "Ahmed",
      "last_name": "Askar",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0c355c5d50.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0c355c5d50.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    },
    {
      "id": 145,
      "username": "SalmaSh",
      "first_name": "Salma",
      "last_name": "Sh",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0ca7a98d39.jpeg",
          "thumb": "http://188.166.71.152/uploads/58a0ca7a98d39.jpeg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "http://188.166.71.152/uploads/58a0ca948ddea.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0ca948ddea.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "http://188.166.71.152/uploads/58a0cff294138.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0cff294138.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "http://188.166.71.152/uploads/58a0cfa9ed7b9.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0cfa9ed7b9.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "http://188.166.71.152/uploads/58a0cfa9ede72.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0cfa9ede72.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        }
      ]
    },
    {
      "id": 146,
      "username": "karimmohamed",
      "first_name": "karim",
      "last_name": "mohamed",
      "images": [
        {
          "image": "http://188.166.71.152/uploads/58a0cb602bdce.jpg",
          "thumb": "http://188.166.71.152/uploads/58a0cb602bdce.jpg",
          "is_sniffed": true,
          "num_of_sniffs": 0
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        },
        {
          "image": "",
          "thumb": ""
        }
      ]
    }
  ]
}

```

`POST {{url}}/api/v1/favs_list`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.

# Blocked Users List

> Response

```json
{
  "success": 1,
  "blocked_users": [
    {
      "user": {
        "id": 13,
        "username": "mohamedshawaf"
      },
      "images": {
        "image": "http://localhost:8000/uploads/5870ebd0b16c6.jpg",
        "thumb": "http://localhost:8000/uploads/5870ebd0b16c6.jpg"
      }
    },
    {
      "user": {
        "id": 20,
        "username": "emadelmogy"
      },
      "images": {
        "image": "http://localhost:8000/uploads/589616d638a27.jpg",
        "thumb": "http://localhost:8000/uploads/589616d638a27.jpg"
      }
    }
  ]
}

```

`POST {{url}}/api/v1/blocked_users_list`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.

# List Alerts

> Response

```json
{
  "success": 1,
  "alerts": [
    {
      "id": 54,
      "dog_name": "Fluffy",
      "dog_breed": "Japanese Chin",
      "dog_age": "1",
      "dog_gender": "Female",
      "description": "hhhhhh jvcc",
      "image": "58d5c0f529ac2.jpg",
      "lng": "31.4781544",
      "lat": "31.0806079",
      "found": null,
      "user": {
        "id": 196,
        "username": "SalmaShehata"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b86b1b45d96.jpg",
        "thumb": "http://188.166.71.152/uploads/58b86b1b45d96.jpg"
      }
    },
    {
      "id": 53,
      "dog_name": "Fluffy",
      "dog_breed": "Japanese Chin",
      "dog_age": "1",
      "dog_gender": "Female",
      "description": "ttttttt",
      "image": "58d5bfe0de96b.jpg",
      "lng": "31.4781544",
      "lat": "31.0806079",
      "found": null,
      "user": {
        "id": 196,
        "username": "SalmaShehata"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b86b1b45d96.jpg",
        "thumb": "http://188.166.71.152/uploads/58b86b1b45d96.jpg"
      }
    },
    {
      "id": 52,
      "dog_name": "Fluffy",
      "dog_breed": "Japanese Chin",
      "dog_age": "1",
      "dog_gender": "Female",
      "description": "test Sniffr alert",
      "image": "58d5bced4e41a.jpg",
      "lng": "31.4781544",
      "lat": "31.0806079",
      "found": null,
      "user": {
        "id": 196,
        "username": "SalmaShehata"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b86b1b45d96.jpg",
        "thumb": "http://188.166.71.152/uploads/58b86b1b45d96.jpg"
      }
    },
    {
      "id": 51,
      "dog_name": "Fluffy",
      "dog_breed": "Japanese Chin",
      "dog_age": "1",
      "dog_gender": "Female",
      "description": "another do lost sniffer alert",
      "image": "58d55eb11a5cb.jpg",
      "lng": "31.4781544",
      "lat": "31.0806079",
      "found": null,
      "user": {
        "id": 196,
        "username": "SalmaShehata"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b86b1b45d96.jpg",
        "thumb": "http://188.166.71.152/uploads/58b86b1b45d96.jpg"
      }
    },
    {
      "id": 50,
      "dog_name": "Fluffy",
      "dog_breed": "Japanese Chin",
      "dog_age": "1",
      "dog_gender": "Female",
      "description": "my dog lost a few hours ago ",
      "image": "58d48b26e6579.jpg",
      "lng": "31.3643035",
      "lat": "31.0455411",
      "found": null,
      "user": {
        "id": 196,
        "username": "SalmaShehata"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b86b1b45d96.jpg",
        "thumb": "http://188.166.71.152/uploads/58b86b1b45d96.jpg"
      }
    },
    {
      "id": 49,
      "dog_name": "Buzzy",
      "dog_breed": "Yorkshire Terrier",
      "dog_age": "2",
      "dog_gender": "Male",
      "description": "Just testing this..\n",
      "image": "58c740c7786ce.jpg",
      "lng": "-79.4021163",
      "lat": "43.6733774",
      "found": null,
      "user": {
        "id": 210,
        "username": "RanaLatif"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58c0b0d776a2e.jpg",
        "thumb": "http://188.166.71.152/uploads/58c0b0d776a2e.jpg"
      }
    },
    {
      "id": 48,
      "dog_name": "Luli",
      "dog_breed": "Afghan Hound",
      "dog_age": "1",
      "dog_gender": "Male",
      "description": null,
      "image": "58bd9b39cb9e9.jpg",
      "lng": "-122.408227",
      "lat": "37.787359",
      "found": null,
      "user": {
        "id": 199,
        "username": "Tester2T"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b896142de9e.jpeg",
        "thumb": "http://188.166.71.152/uploads/58b896142de9e.jpeg"
      }
    },
    {
      "id": 47,
      "dog_name": "Bob",
      "dog_breed": "Miniature Schnauzer",
      "dog_age": "700",
      "dog_gender": "Other",
      "description": null,
      "image": "58b8b66b94dcc.jpg",
      "lng": "-79.402166",
      "lat": "43.642253",
      "found": null,
      "user": {
        "id": 200,
        "username": "ScottDarling"
      },
      "images": {
        "image": "http://188.166.71.152/uploads/58b8ae9a5575c.jpeg",
        "thumb": "http://188.166.71.152/uploads/58b8ae9a5575c.jpeg"
      }
    }
  ]
}

```

`POST {{url}}/api/v1/alerts_list`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.


# Remove Block

> Payload

```json
{
	"user_id":"20"
}

```

> Response

```json
{
  "success": 1,
  "message": "Block has been removed"
}

```
`POST {{url}}/api/v1/unblock`


# Remove From Favourites

> Payload

```json
{
	"user_id":"16"
}

```

> Response

```json
{
  "success": 1,
  "message": "user has been removed from favorites"
}

```

`POST {{url}}/api/v1/remove_from_favs`

# Home Page Search

> Payload

```json
{
	"key_word":"andre"
}

```

> Response

```json
{
  "success": 1,
  "results": [
    {
      "id": 23,
      "first_name": "andre",
      "lat": "41.8781",
      "lng": "87.6298",
      "country": "China",
      "is_favourited": false,
      "images": []
    },
    {
      "id": 25,
      "first_name": "andre",
      "lat": "41.8781",
      "lng": "87.6298",
      "country": "China",
      "is_favourited": false,
      "images": [
        {
          "id": 14,
          "image": "http://localhost:8000/uploads/589f8606e5fa1.png",
          "thumb": "http://localhost:8000/uploads/589f8606e5fa1.png",
          "is_sniffed": false,
          "num_of_sniffs": 0
        },
        {
          "id": 15,
          "image": "",
          "thumb": ""
        },
        {
          "id": 16,
          "image": "",
          "thumb": ""
        },
        {
          "id": 17,
          "image": "",
          "thumb": ""
        },
        {
          "id": 18,
          "image": "",
          "thumb": ""
        }
      ]
    }
  ]
}

```

`POST {{url}}/api/v1/home_search`

You can paginate the results using the following parameters:

- `skip` how many items to skip before starting the count.
- `per_page` how many items to show per page.


# View Post

> Payload

```json
{
	"post_id":"5"
}

```

> Response

```json
{
  "success": 1,
  "post": {
    "id": 5,
    "thumb": "http://188.166.71.152/uploads/58948de0f303a.jpeg",
    "caption": "Amazing Video",
    "created_at": "2017-02-03 16:04:16",
    "video": "",
    "image": "http://188.166.71.152/uploads/58948de0f303a.jpeg",
    "is_liked": 0,
    "num_of_sniffs": 0,
    "num_of_comments": 0,
    "user": {
      "id": 13,
      "first_name": "Marmra",
      "thumb": "http://188.166.71.152/uploads/589751f58696f.jpg"
    }
  }
}

```

`POST {{url}}/api/v1/view_post`

# Sniffr Alert

> Payload

```json
{
	"dog_name":"brie",
	"dog_breed":"test",
	"dog_gender":"female",
	"dog_age" : "3",
	"description" :" this is for testing purpose",
	"image":"image.jpg",
	"lat":"30.0444",
	"lng":"31.2357"
}

```

> Response


```json
{
  "success": 1,
  "message": "Alert has sent Successfully."
}

```

`POST {{url}}/api/v1/sniffr_alert`


# Update Sniffr Alert

> Payload

```json
{
	"found":"1",
	"alert_id":"5"
}

```
> Response

```json
{
	"success":1,
  "message": "Sniffr Alert has been been updated."
}

```
`POST {{url}}/api/v1/edit_alert`


# View Profile Image

> Payload

```json
{
	"image_id":"427"
}

```

> Response


```json
{
  "success": 1,
  "post": {
    "id": 427,
    "image": "http://188.166.71.152/uploads/58aa56ec1f9a6.jpeg",
    "thumb": "http://188.166.71.152/uploads/58aa56ec1f9a6.jpeg",
    "is_sniffed": true,
    "number_of_sniffs": 1
  }
}

```

`POST {{url}}/api/v1/view_profile_image`

# Support API


> Payload

```json
{
	"name":"emad",
	"email":"emad@mail.com",
	"device_name":"huwaie p8 lite",
	"os_version":"android",
	"message":"this is for testing"
}

```

> Response


```json
{
  "success": 1,
  "message": "your message has been sent."
}

```

`POST {{url}}/api/v1/support`

# Report API

> Payload

```json
{
	"type":"1",
	"reason":"2",
	"issue":"this is for testing purpose.",
	"post_id":"103"
}

```

> Response


```json
{
  "success": 1,
  "message": "your report has been sent."
}

```

`POST {{url}}/api/v1/create_report`

### Report Types are :

- 1 :  spam
- 2 :  INAPPROPRIATE
- 3 :  other


### Spam Reasons are :

-  1 :  I dont want to see posts like this anymore
-  2 :  It contains false information
-  3 :  It is used to promote inappropriate products

### INAPPROPRIATE Reasons are :

- 1 :  Intellectual property violation
- 2 :  Hate speech or symbols
- 3 :  Nudity or pornography
- 4 :  Harassment or bullying
- 5 :  Self Injury
