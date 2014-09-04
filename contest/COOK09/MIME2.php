<?php require("../../includes/header.php"); ?><h1>Internet Media Types</h1><div class="content">

<p>Many internet protocols these days include the option of associating a<br />
media type with the content being sent.<br />
The type is usually inferred from the file extension.<br />
You are to write a program that facilitates the lookup of media types for<br />
a number of files.</p>
<p>You will be given a table of media type associations that associate a certain<br />
file extension with a certain media type.<br />
You will then be given a number of file names, and tasked to determine the correct<br />
media type for each file.<br />
A file extension is defined as the part of the file name after the final period.<br />
If a file name has no periods, then it has no extension and the media type cannot<br />
be determined.<br />
If the file extension is not present in the table, then the media type cannot be<br />
determined.<br />
In such cases you will print "unknown" as the media type.<br />
If the file extension does appear in the table (case matters), then print the associated<br />
media type.</p>
<h3>Input</h3>
<p>Input begins with 2 integers N and Q on a line.<br />
N is the number of media type associations, and Q is the number of file names.<br />
Following this are N lines, each containing a file extension and a media type, separated by a space.<br />
Finally, Q lines, each containing the name of a file.</p>
<p>N and Q will be no greater than 100 each.<br />
File extensions will consist only of alphanumeric characters, will have length at most 10, and will be distinct.<br />
Media types will have length at most 50, and will contain only alphanumeric characters and punctuation.<br />
File names will consist only of alphanumeric characters and periods and have length at most 50.</p>
<h3>Output</h3>
<p>For each of the Q file names, print on a line the media type of the file.<br />
If there is no matching entry, print "unknown" (quotes for clarity).</p>
<h3>Sample Input</h3>
<pre>5 6
html text/html
htm text/html
png image/png
svg image/svg+xml
txt text/plain
index.html
this.file.has.lots.of.dots.txt
nodotsatall
virus.exe
dont.let.the.png.fool.you
case.matters.TXT
</pre><h3>Sample Output</h3>
<pre>text/html
text/plain
unknown
unknown
unknown
unknown
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-04-2011</td>
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