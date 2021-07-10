# Keyword Argument List
print()
print('=======Output=======')
print()


def create_html(tag, text, **attributes):
    html = f"<{tag}"

    for key, val in attributes.items():
        html = html + f" {key}='{val}'"

    html = html + f">{text}</{tag}>"
    return html


print(create_html("a", "Hello", style="ok"))
print(create_html("p", "Hello"))
