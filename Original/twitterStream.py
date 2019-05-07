import tweepy

consumer_key = '4VAjZs4HLzRmLBfkTyuc6Sdja'
consumer_key_secret = 'eTjOXU6RA4Aphx1jQU6jq15ja2bKdUYzQxlJOW1W1KQPHPzRKl'
access_token = '848968123524841473-fqOuzpfTWK2DeEZLVuZuTdqkakVoTtR'
access_token_secret = 'GNz6Dr39RsNAcwe4UURmEiP1zbx16zXIxtEz4RWUxRY9z'

class TweetListener(tweepy.StreamListener):
	def on_status(self, status):
		print('Tweet text: ' + status.text)
		return True
	
	def on_error(self, status_code):
		print('Got an error with status code: ' + str(status_code))
		return True

	def on_timeout(self):
		print('Timeout...')
		return True

if __name__== '__main__':
	listener = TweetListener()
	auth = tweepy.OAuthHandler(consumer_key,consumer_key_secret)
	auth.set_access_token(access_token,access_token_secret)
	
	stream = tweepy.Stream(auth, listener)
	stream.filter(follow=[], track=['#automotive','#Authletics'])


