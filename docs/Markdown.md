# Markdown: Doing fancy stuff in Discord text

You may have noticed some discord messages have fancy formatting. This is acomplished by using the markdown format. Discord only allows for a specific subset of the format right now. 

### Basics
*Italics* - `*Italics* or _Italics_`    
**Bold** - `**Bold**`    
~~Strikeout~~ - `~~StrikeOut~~`    
__Underline__ - `__Underline__`    
||Spoilered Text|| - `||Spoilered Text||`    

### Combos
***Bold Italics*** - `***Bold Italics***`    
__*Underline Italics*__ - `__*Underline Italics*__`    
__**Underline Bold**__ - `__**Underline Bold**__`    
__***Underline Bold Italics***__ - `__***Underline Bold Italics***__`

~~*Strikeout Italics*~~ - `~~*Strikeout Italics*~~`

~~**Strikeout Bold**~~ - `~~**Strikeout Bold**~~`

~~***Strikeout Bold Italics***~~ - `~~***Strikeout Bold Italics***~~`

The below may not be supported on all systems, and is not supported on GitHub

~~__Strikeout Underline__~~ - `~~__Strikeout Underline__~~`

~~__*Strikeout Underline Italics*__~~ - `~~__*Strikeout Underline Italics*__~~`

~~__**Strikeout Underline Bold**__~~ - `~~__**Strikeout Underline Bold**__~~`

~~__***Strikeout Underline Bold***__~~ - `~~__***Strikeout Underline Bold Italics***__~~`


### Disabling Markdown
Discord also provides a way to prevent markdown from being applied, just add a backslash `\` before the markdown character. For example, `\*\*Not Bold\*\*` will prevent the text from being bold, and the backslash will disapear from the visible text. You can be lazy under some circumstances, and `\**only use one backslash**`, but this tends to cause issues with unintended formatting, so it's a good idea to be thorough.

### Quotes and Code

If you want to do some quoted text, start a line with a right angular bracket > **immediately followed by a space**.
> Some quoted text - `> Some quoted text`

If you want to do a multiline block quote, either start every quoted line like that (including empty ones!)...
> This is a lengthy quote.
> It takes up a few lines.
> 
> It even has paragraph breaks!

...or start a line with >>> three brackets followed by a space (which will quote the rest of the message).
```
I can't show it here, but
>>> starting from this line,
the entire rest of the message would be formatted as a block quote.
```

If you want to do preformatted text (such as for code, mathematical expressions, or ascii art), surround it in backticks \`.    
`Preformatted Text` - \`Preformatted Text\`

Preformatted text also ignores most markdown, similar to a backslash.
`As a matter of fact, even \ backslashes are displayed literally.`

If you use markdown *outside* of preformatted text, though, you can still format the text within.
__***`Preformatted Underline Bold Italics`***__ - \_\_\*\*\*\`Preformatted Underline Bold Italics\`\*\*\*\_\_

If you want to do a block of preformatted text, surround the text in three backticks. \`\`\`    
```
This is a haiku 
about a wonderful thing 
called markdown format.
```

If you want to share longer snippets of code, add code highlighting to your message: do a preformatted block, but add the name of the language after the first three backticks. For example \```java will apply Java syntax highlighting to the code.    
```java
    
    /**
     * Safely drops an ItemStack into the world. Used for mob drops.
     *
     * @param world The world to drop the item in.
     * @param pos The base pos to drop the item.
     * @param stack The stack to drop.
     */
    public static void dropStackInWorld (@Nonnull World world, @Nonnull BlockPos pos, @Nonnull ItemStack stack) {
        
        if (!world.isRemote && world.getGameRules().getBoolean("doTileDrops")) {
            
            final float offset = 0.7F;
            final double offX = world.rand.nextFloat() * offset + (1.0F - offset) * 0.5D;
            final double offY = world.rand.nextFloat() * offset + (1.0F - offset) * 0.5D;
            final double offZ = world.rand.nextFloat() * offset + (1.0F - offset) * 0.5D;
            final EntityItem entityitem = new EntityItem(world, pos.getX() + offX, pos.getY() + offY, pos.getZ() + offZ, stack);
            entityitem.setPickupDelay(10);
            world.spawnEntity(entityitem);
        }
    }
```
