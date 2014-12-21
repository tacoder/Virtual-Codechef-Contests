<?php require("../../includes/header.php"); ?><h1>APP DEVELOPER DILEMMA</h1><div class="content">

<p>
<br />Magar Anand is Pro-App developer. He usually writes apps using his own mXAML(modified XAML format) code.<br />
<br />However, since he writes such enormous apps with XAML, he finds it difficult to maintain statistics of his code.
</p>
<p>
<br />The most basic unit of mXAML code is a tag. A tag can be either opening or closing or both.<br />
<br /> This is an opening tag &lt;StackPanel&gt; while this is a closing tag &lt;/StackPanel&gt; whereas a both opening and closing tag is &lt;StackPanel/&gt;<br />
<br />Here, StackPanel is a tagname. Tagnames can have only lower-case and upper-case alphabets.<br />
<br />Now, <b>Opening tags</b> and <b>both Opening and Closing tags</b> may have attributes associated with it.<br />
<br />Attributes are specified by listing them after the tagname separated by spaces. Attribute names can have only lower-case and upper-case alphabets.<br />
<br />Each attribute can have a string value consisting of lower-case and upper-case alphabets, numbers and commas and periods.<br />
<br />This is the general format of a tag.<br />
<br />&lt;Tagname Attribute1name="value1" Attribute2name="value2"......&gt;  //For opening tags<br />
<br />&lt;Tagname Attribute1name="value1" Attribute2name="value2"......&gt;  //For both opening and closing tags<br />
<br />Where tagname and attributenames can be any valid names for tags and attributes as specified above.<br />
<br />Note that there is no need for an opening tag to match with a closing tag except for the first tag in input. The input terminates with the closing tag for the first tag.
</p>
<p>
<br />Now tags can also be indented for purposes of nesting. Indenting is done with the character '#'.<br />
<br />The number of #s preceding a tag is the level of indentation for the tag. (A tag without any preceding #'s is said to have 0 level of indentation)<br />
<br />You need to help Magar Anand to find the tags, their levels of indenting and number of attributes which are used in each tag. Clearly, you only need to do this for open tags or both opening/closing tags only, since closing tags cannot have attributes.
</p>

<h2>Input</h2>
<p> Input will consist of multiple lines of valid mXAML code.<br />
Each line will have only one tag either opening, closing or both opening/closing.<br />
The input terminates with the closing tag for the first tag.<br />
Input will not have more than 100 lines. Length of each line will not exceed 200 characters.
</p>
<h2>Output</h2>
<p> For each opening or both opening/closing tag, you need to print the name of the tag, level of the tag and the number of attributes used in that particular tag.</p>

<h2>Example</h2>
<p> <b>Input:</b></p>
<p>
<br />&lt;StackPanel&gt;<br />
<br />#&lt;Panel color="023456" margin="1,1,1,1"&gt;<br />
<br />#&lt;Panel backgroundcolor="234556" margin="2,3,4,3"/&gt;<br />
<br />##&lt;Label text="HelloWorld"/&gt;<br />
<br />#&lt;/Panel&gt;<br />
<br />&lt;/StackPanel&gt;<br />
<br />
</p>
<p> <b>Output:</b></p>
<p>StackPanel 0 0<br />
<br />Panel 1 2<br />
<br />Panel 1 2<br />
<br />Label 2 1<br />
<br />
</p>
<h2>Explanation</h2>
<p><b>Example case 1.</b>"StackPanel" is a tag with indent 0 and 0 attributes. Next line, Panel has 1 indent and 2 attributes "color" and "margin". Next Panel also has the same number of indents and attributes.<br />
"Label" has 1 attribute "text" and 2 indents. Rest of the tags are closing and should not be processed. Note that &lt;/StackPanel&gt; terminates the input since &lt;StackPanel&gt; if the first tag.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/srujanjha">srujanjha</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>