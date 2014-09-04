<?php require("../../includes/header.php"); ?><h1>Cactus</h1><div class="content">

<p class=MsoNoSpacing><b><span style='font-size:10.0pt'>Smith</span></b><span<br />
style='font-size:10.0pt'> bought a triangular piece of land in Rajasthan. The<br />
land contains a lot of cacti and he wants to get them removed. Land being<br />
triangular in shape makes it difficult for him to determine which cacti are<br />
present in his land.</span<br></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>Your program will be given<br />
the coordinates of the vertices of the triangular land and the coordinates of<br />
all the cacti. Determine the area of land belonging to <b>Smith</b> and the number<br />
of cacti present in his piece of land. Consider the cacti on the very border of<br />
his piece to belong to him. </span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>The area of a triangle<br />
with vertices (x<sub><span style='position:relative;top:2.5pt'>A</span></sub>,<br />
y<sub><span style='position:relative;top:2.5pt'>A</span></sub>), (x<sub><span<br />
style='position:relative;top:2.5pt'>B</span<br></sub></span>, y<sub><span<br />
style='position:relative;top:2.5pt'>B</span<br></sub>) and (x<sub><span<br />
style='position:relative;top:2.5pt'>C</span<br></sub>, y<sub><span<br />
style='position:relative;top:2.5pt'>C</span<br></sub>) is given by the following<br />
formula:</p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>|<i>x<sub>A</sub></i></span><span<br />
style='font-size:10.0pt'>( <i>y<sub>B</sub> </i>&#8722; <i>y<sub>C</sub> </i>)<br />
+ <i>x<sub>B</sub> </i>( <i>y<sub>C</sub> </i>&#8722; <i>y<sub>A</sub> </i>) + <i>x<sub>C</sub><br />
</i>( <i>y<sub>A</sub> </i>&#8722; <i>y<sub>B</sub> </i>)<span<br />
style='font-size:10.0pt'>| / 2</span<br></span<br></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>&nbsp;</span></p>
<p class=MsoNoSpacing><b><span style='font-size:10.0pt'>Input:</span></b></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>The first three lines<br />
contain the coordinates of the vertices of the triangle. The following line<br />
contains the integer N (1 &#8804; N &#8804; 100), the number of cacti. Each of<br />
the following N lines contains the coordinates of one cactus. All coordinates<br />
are pairs of positive integers less than 1000, separated by a space. </span></p>
<p class=MsoNoSpacing><b><span style='font-size:10.0pt'>Output:</span></b></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>Print the area of land<br />
belonging to <b>Smith</b> on the first line, with one digit after the decimal<br />
point. </span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>Print the number of cacti<br />
belonging to <b>Smith</b> on the second line.</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>&nbsp;</span></p>
<p class=MsoNoSpacing><b><span style='font-size:10.0pt'>Example:</span></b></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>Input:</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>3 2</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>5 4</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>1 6</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>3</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>2 4</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>3 5</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>4 3 </span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>&nbsp;</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>Output:</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>6.0</span></p>
<p class=MsoNoSpacing><span style='font-size:10.0pt'>3</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>