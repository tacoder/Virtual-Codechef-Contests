<?php require("../../includes/header.php"); ?><h1>I for Insomnia</h1><div class="content">

<div style="font-family: monospace">
Given a matrix of dimensions RxC composed of only two types of characters: <br/><br/><br />
'*' and '#' <br/><br/><br />
 find the number of I characters present in the matrix. The<br />
criteria for identifying an I is as follows:<br />
<br/><br/>
<ul style="font-family: monospace">
<li style="font-family: monospace">
All the characters forming the I are # only.
</li>
<li style="font-family: monospace">
The figure is completely filled with #s.
</li>
<li style="font-family: monospace">
The thickness and width of the top and bottom rectangles is identical.
</li>
<li style="font-family: monospace">
The central column is formed by leaving out floor(width/3) positions on both<br />
sides.
</li>
<li style="font-family: monospace">
The central column may be of any length >= 1
</li>
<li style="font-family: monospace">
The I must be surrounded by "*" or the border (i.e. no additional attachments to the I)
</li>
</ul>
<p><br/></br/></p>
<p>Note: A given input figure is likely to contain multiple I's.</p>
<p><br/><br/><br />
<b>Input Format:</b><br />
<br/><br />
Line 1: R C - Two space separated natural numbers denoting the dimensions of<br />
the rows and columns in the matrix respectively. Both R and C will be less than or equal to 40.<br />
<br/><br />
Line 2 to R+1: Lines containing C space separated symbols. The symbols are<br />
chosen from the set {*, #}</br/></br/></br/></br/></p>
<p><br/><br/><br />
<b>Output Format:</b><br />
<br/><br />
Line 1: The number of I's in the given figure. </br/></br/></br/></p>
<p><br/><br/><br />
<b>Sample Input:</b></br/></br/></p>
<pre>
10 10
# # # # # # # # # #
# # # # # # # # # #
* * * # # # # * * *
* * * # # # # * * *
* * * # # # # * * *
* * * # * # # # * *
* * * # # # # * * *
* * * # # # # * * *
# # # # # # # # # #
# # # # # # # # # #
</pre><p><br/><br />
<b>Sample Output:</b></br/></p>
<pre>
0
</pre><p>
<br/><br />
Explanation: The given I is invalid because of 2 reasons:<br />
<br/><br />
It is not completely filled<br />
<br/><br />
It has an extra attachment of a # on the right side of the central column.<br />
<br/>
</br/></br/></br/></br/></p></br/></br/></br/></br/></br/></br/></div>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>