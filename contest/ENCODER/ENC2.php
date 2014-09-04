<?php require("../../includes/header.php"); ?><h1>Words</h1><div class="content">

<p>Having flexed his grey cells a bit, Little Neumann craves for more. Having been taught the basics of English and Latin, he now sees the golden thread connecting the English language and his primary fascination, mathematics.<br />
<br /><br /><br />
Having seen long words in his study, Little Neumann wants to know the maximum number of words a given word can be split into, such that the resulting words all form legitimate words contained in a given dictionary.<br />
<br /><br /><br />
For example, the string AMANGO can be split as {A, MANGO}, {A, MAN, GO} and {AM, AN, GO}, wherein, each of the resulting words is contained within the dictionary {A, AM, AN, GO, MAN}, here the final set of split up words does not produce any word that is not contained in the dictionary.<br />
</p>
<h3>Input</h3>
<p> First line contains the number of test cases to follow, 1&lt;=t&lt;=10,<br /><br />
Next line contains the String, n that has to be divided into words. The size of the string is between [1,1500], both inclusive.<br /><br />
Next line contains, l the number of words in the dictionary, 1&lt;=l&lt;=100<br /><br />
Next l line contains l words.<br /><br />
<br /><br />
Note: There is one line gap between two test cases.<br />
 </p>
<h3>Output</h3>
<p>For each test case output the maximum number of words that can be generated from the string.</p>
<p></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
amantentononewitheel
19
a
an
am
ant
ent
tent
man
ten
on
one
ton
no
none
new
with
the
he
heel
wit

amango
5
a
am
an
man
go

<b>Output:</b>
7
3

<h3>Explanation</h3>For case 1: the split for this string is: a, man, ten, ton, one, wit, new
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kunalsangwan">kunalsangwan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>