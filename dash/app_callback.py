# https://dash.plotly.com/basic-callbacks

import dash
import dash_core_components as dcc
import dash_html_components as html
from dash.dependencies import Input, Output

external_stylesheets = ['https://codepen.io/chriddyp/pen/bWLwgP.css']

app = dash.Dash(__name__, external_stylesheets=external_stylesheets)

app.layout = html.Div([
    html.H6("Change the value in the text box to see callbacks in action!"),

    html.Div(["Input: ",
              # value - значение свойства из component_property
              dcc.Input(id='my-input1', value='initial value', type='text')]),
    html.Br(),
    # id - id объекта к котрому мы обращаемся в callback
    html.Div(id='my-output2'),
])


@app.callback(
    # component_id - к какому объекту (по id) мы ссылаемся в app.layout
    # component_property - свойство объекта, value - значение свойства
    Output(component_id='my-output2', component_property='children'),
    Input(component_id='my-input1', component_property='value')
)  # input_value - то свойство которое выбрано из html.Div value='initial value'
def update_output_div(input_value):
    return 'Output: {}'.format(input_value)


if __name__ == '__main__':
    app.run_server(debug=True)
"""
1. The "inputs" and "outputs" of our application's interface are described
 declaratively as the arguments of the @app.callback decorator.

Learn more about using the `@app.callback` decorator.
a. By writing this decorator, we're telling Dash to call this function for us whenever the value of the "input"
 component (the text box) changes in order to update the children of the "output" component on the page (the HTML div).
b. You can use any name for the function that is wrapped by the @app.callback decorator. The convention is that the
 name describes the callback output(s).
c. You can use any name for the function arguments, but you must use the same names inside the callback function 
as you do in its definition, just like in a regular Python function. The arguments are positional: first the Input
 items and  then any State items are given in the same order as in the decorator.
d. You must use the same id you gave a Dash component in the app.layout when referring to it as either an input or
 output of the @app.callback decorator.
e. The @app.callback decorator needs to be directly above the callback function declaration. If there is a blank line
 between the decorator and the function definition, the callback registration will not be successful.
f. If you're curious about what the decorator syntax means under the hood, you can read this StackOverflow answer and
 learn more about decorators by reading PEP 318 -- Decorators for Functions and Methods.
 
2. In Dash, the inputs and outputs of our application are simply the properties of a particular component. 
In this example, our input is the "value" property of the component that has the ID "my-input". Our output is
the "children" property of the component with the ID "my-output".
 
3. Whenever an input property changes, the function that the callback decorator wraps will get called automatically.
 Dash provides the function with the new value of the input property as an input argument and Dash updates the property
 of the output component with whatever was returned by the function.
  
4. The component_id and component_property keywords are optional (there are only two arguments for each of those
 objects). They are included in this example for clarity but will be omitted in the rest of the documentation
 for the sake of brevity and readability.
  
5. Don't confuse the dash.dependencies.Input object and the dash_core_components.Input object. The former is just used
 in these callbacks and the latter is an actual component.
 
6. Notice how we don't set a value for the children property of the my-output component in the layout. When the Dash
 app starts, it automatically calls all of the callbacks with the initial values of the input components in order to
 populate the initial state of the output components. In this example, if you specified something like
 html.Div(id='my-output', children='Hello world'), it would get overwritten when the app starts.
   
It's sort of like programming with Microsoft Excel: whenever an input cell changes, all of the cells that depend on
that cell will get updated automatically. This is called "Reactive Programming".

Remember how every component was described entirely through its set of keyword arguments? Those properties are
important now. With Dash interactivity, we can dynamically update any of those properties through a callback function.
Frequently we'll update the children of a component to display new text or the figure of a dcc.Graph component to
display new data, but we could also update the style of a component or even the available 
options of a dcc.Dropdown component!
"""
