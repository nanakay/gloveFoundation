
import webapp2
import jinja2

template_dir = "html_templates"
jinja_env = jinja2.Environment(loader = jinja2.FileSystemLoader(template_dir),
                               autoescape = True)

class Handler(webapp2.RequestHandler):
    """
    Parent class for all other webpages.
    """    
    def write(self, *a, **kw):
        self.response.out.write(*a, **kw)

    def render_str(self, template, **params):
        t = jinja_env.get_template(template)
        return t.render(params)

    def render(self, template, **kw):
        self.write(self.render_str(template, **kw))

class MainHandler(Handler):
    def get(self):
        self.redirect('/home')
        
class HomeHandler(Handler):
    def get(self):
        self.render("aboutUs.htm")
        
class LatestNewsHandler(Handler):
    def get(self):
        self.render("latestNews.htm")
        
class GalleryHandler(Handler):
    def get(self):
        self.render("gallery.htm")   
        
class EventsHandler(Handler):
    def get(self):
        self.render("events.htm")
        
class AboutUsHandler(Handler):
    def get(self):
        self.render("aboutUs.htm")
        
class ContactUsHandler(Handler):
    def get(self):
        self.render("aboutUs.htm")
        
class RedHandler(Handler):
    def get(self):
        self.render("redhome.htm")
        
class BlueHandler(Handler):
    def get(self):
        self.render("homeblue.htm")

app = webapp2.WSGIApplication([
    ('/', MainHandler),
    ('/home', HomeHandler),
    ('/latest', LatestNewsHandler),
    ('/gallery', GalleryHandler),
    ('/events', EventsHandler),
    ('/aboutus', AboutUsHandler),
    ('/contactus', ContactUsHandler),
    ('/homered', RedHandler),
    ('/homeblue', BlueHandler)
], debug=True)
