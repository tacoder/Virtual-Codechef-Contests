<?php require("../../includes/header.php"); ?><h1>Saruman of Many Colours</h1><div class="content">

<p><html> <head> </head> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Saruman of Many Colours<br /> </h2>
<p> <i>'"For I am Saruman the Wise, Saruman Ring-maker, Saruman of Many Colours!"<br />     'I looked then and saw that his robes, which had seemed white, were not so, but were woven of all colours.     And if he moved they shimmered and changed hue so that the eye was bewildered.'</i> - Gandalf the Grey.</p>
<p> And so it was that Saruman decided to brand his Uruk-hai army with the many colours that he fancied. His method of branding his army was as follows.<br /> He straps his army of <b>N</b> Uruk-hai onto chairs on a conveyor belt. This conveyor belt passes through his colouring-room, and can be moved forward or backward. The Uruk-hai are numbered 0 to <b>N</b>-1 according to the order in which they are seated. Saruman wishes that the i'th Uruk-hai be coloured with the colour <b>c[i]</b>.<br /> Further, his colouring-room has space for exactly <b>K</b> chairs. Once the chosen <b>K</b> consecutive Uruk-hai are put into the room, a colour jet sprays all <b>K</b> of them with any fixed colour. The conveyor belt is not circular (which means that the <b>N</b>-1'th and the 0'th Uruk-hai are not consecutive). Note that Uruk-hai can be recoloured in this process.</p>
<p> Saruman wants to find out what is the minimum number of times that the jet needs to be used in order to colour his army in the required fashion. If it is not possible to colour the army in the required fashion, output -1.</p>
<h3>Input (STDIN):</h3>

<p> The first line contains the number of test-cases <b>T</b>.<br /> Each test case consists of 2 lines. The first line contains two space-separated integers, <b>N</b> and <b>K</b>.<br /> This is followed by a single line containing a string <b>c</b> of length <b>N</b>, describing the colours of the army. The i'th character of <b>c</b> denotes the colour of the i'th Uruk-hai in the army.</p>
<h3>Output (STDOUT):</h3>

<p> Output <b>T</b> lines, one for each test case containing the answer for the corresponding test case. Remember if it is not possible to colour the army as required, output -1.</p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt;= 50<br /> 1 &lt;= K &lt;= N &lt;= 20,000<br /> The string c has length exactly N and contains only the characters 'a',...,'z'.</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 3 2<br /> rgg<br /> 3 3<br /> rgg</span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> -1</span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> In the first test case, soldiers 0 and 1 can first be painted with 'r', and then soldiers 1 and 2 can be painted with 'g'.<br /> In the second test case, since N = K, all the soldiers will only have the same color.</p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>