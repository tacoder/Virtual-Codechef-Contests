<?php require("../../includes/header.php"); ?><h1>Morse code</h1><div class="content">

<p>Morse code is the cheapest and most popular way of message communitcation. In Morse code, each letter of the alphabet is represented by a sequence of dots and dashes. Traditionally, dots were transmitted by a short note and dashes by a longer note, with pauses between different letters.</p>
<p>Morse code representation of each letter of the english alphabet are as follows<br /><br />
a .- <br /><br />
b -...<br /><br />
c -.-.<br /><br />
d -..<br /><br />
e .<br /><br />
f ..-.<br /><br />
g --.<br /><br />
h ....<br /><br />
i ..<br /><br />
j .---<br /><br />
k -.-<br /><br />
l .-..<br /><br />
m --<br /><br />
n -.<br /><br />
o ---<br /><br />
p .--.<br /><br />
q --.- <br /><br />
r .-.<br /><br />
s ...<br /><br />
t -<br /><br />
u ..-<br /><br />
v ...-<br /><br />
w .--<br /><br />
x -..-<br /><br />
y -.--<br /><br />
z --..<br /></p>
<p>For example dog is written as -..<gap>---<gap>--.</gap></gap></p>
<p>Note that every combination of between 1 and 4 dots and dashes is used, except for<br /><br />
..--<br /><br />
.-.-<br /><br />
---.<br /><br />
----<br /></p>
<p>Interestingly incoming message tone of many mobile phones make the sound ... -- ... when receiving a SMS. Because this is the Morse Code for 'SMS'.</p>
<p>Main problem with Morse Code is the gaps between letters. If gaps are absent by mistake then the message becomes ambiguous.</p>
<p>For example, let the message is -..-----. and it is made up of three letters, it might mean njg, dog, xmg or xon.<br />
Again, let the message is -...----.--. and it is also made up of three letters. It might mean boy or djy.</p>
<p>Write a program which reads in a message (between 1 and 10 letters all, both inclusive) and determines how many messages, with the same number of letters as the input, it might represent. Your program should output all possible messages. You have to consider small case letters only (a-z). Consider only 'dog', not 'DOG' or 'Dog'.</p>
<h3>Input</h3>
<p>First line of the input file will specify the number of test cases. In the following line you have to specify that many test cases, one at each line. </p>
<h3>Output</h3>
<p>For each test case the output file must have all possible messages, one message per line. At the end it should have-<br />
total<white space>n<br />
Where 'n' is the total number of messages possible. For a wrong input (like 'Code' in above sample file), output file should contain the entry 'error' and in the following line it should mention 'total 0'.</white></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
dog
man
Code

<b>Output:</b>
dog

njg

xmg

xon

total 4

gme

gtn

man

meg

mwe

qte

tkn

tng

ttp

tye

total 10

error

total 0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bst0602">bst0602</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>