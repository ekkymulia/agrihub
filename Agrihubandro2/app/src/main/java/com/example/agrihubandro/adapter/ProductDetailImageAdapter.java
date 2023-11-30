package com.example.agrihubandro.adapter;

import android.content.Context;
import android.graphics.drawable.Drawable;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.load.DataSource;
import com.bumptech.glide.load.engine.GlideException;
import com.bumptech.glide.request.RequestListener;
import com.bumptech.glide.request.target.Target;
import com.example.agrihubandro.R;
import com.example.agrihubandro.models.ProductModel;

import java.util.ArrayList;

public class ProductDetailImageAdapter extends RecyclerView.Adapter<ProductDetailImageAdapter.ViewHolder> {
    Context context;
    ArrayList<String> arrayList;
    OnItemClickListener onItemClickListener;

    public ProductDetailImageAdapter(Context context, ArrayList<String> arrayList) {
        this.context = context;
        this.arrayList = arrayList;
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(context).inflate(R.layout.activity_product_image_list, parent, false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        String product = arrayList.get(position);
        Log.d("IMGAES", product);

        Glide.with(holder.itemView.getContext())
                .load(product) // Assuming getUrl_gambar() returns the image URL
                .placeholder(R.drawable.ic_logo_splash_banner) // Placeholder image while loading
                .error(R.drawable.ic_logo_agrihub) // Image to show if loading fails
                .listener(new RequestListener<Drawable>() {
                    @Override
                    public boolean onLoadFailed(@Nullable GlideException e, Object model, Target<Drawable> target, boolean isFirstResource) {
                        Log.e("GlideError", "Image load failed: " + e != null ? e.getMessage() : "Unknown error");
                        return false; // Return false to allow the error placeholder to be shown
                    }

                    @Override
                    public boolean onResourceReady(Drawable resource, Object model, Target<Drawable> target, DataSource dataSource, boolean isFirstResource) {
                        Log.d("GlideSuccess", "Image loaded successfully");
                        return false;
                    }
                })
                .into(holder.imageView);
        // Set other data to respective views as needed

        holder.itemView.setOnClickListener(view -> onItemClickListener.onClick(holder.imageView, arrayList.get(position)));

    }

    @Override
    public int getItemCount() {
        return arrayList.size();
    }

    public static class ViewHolder extends RecyclerView.ViewHolder {
        ImageView imageView;
        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            imageView = itemView.findViewById(R.id.list_item_image);
        }
    }

    public void setOnItemClickListener(OnItemClickListener onItemClickListener) {
        this.onItemClickListener = onItemClickListener;
    }

    public interface OnItemClickListener {
        void onClick(ImageView imageView, String path);
    }
}